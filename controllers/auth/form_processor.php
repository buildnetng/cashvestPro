<?php
if (isset($_POST['registration_request']) && $_SERVER['REQUEST_METHOD'] == "POST") {
    session_start();
    $fullname = htmlspecialchars(trim($_POST['fullname'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $password = htmlspecialchars(trim($_POST['password'] ?? ''));
    $confirm_password = htmlspecialchars(trim($_POST['confirm_password'] ?? ''));

    if (empty($fullname)) {
        echo json_encode(['status' => 'error', 'messages' => ['Full name is required']]);
        exit;
    } else {
        $nameParts = explode(" ", $fullname);
        $first_name = $nameParts[0];
        $last_name = isset($nameParts[1]) ? $nameParts[1] : '';
        if (empty($first_name)) {
            echo json_encode(['status' => 'error', 'messages' => ['First name is required']]);
            exit;
        }
        if (empty($last_name)) {
            echo json_encode(['status' => 'error', 'messages' => ['Last name is required']]);
            exit;
        }
    }

    if (empty($email)) {
        echo json_encode(['status' => 'error', 'messages' => ['Email is required']]);
        exit;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'error', 'messages' => ['Invalid email format']]);
        exit;
    }

    if (empty($password)) {
        echo json_encode(['status' => 'error', 'messages' => ['Password is required']]);
        exit;
    } elseif (strlen($password) < 8) {
        echo json_encode(['status' => 'error', 'messages' => ['Password must be at least 8 characters long']]);
        exit;
    }

    if (empty($confirm_password)) {
        echo json_encode(['status' => 'error', 'messages' => ['Please confirm your password']]);
        exit;
    } elseif ($password !== $confirm_password) {
        echo json_encode(['status' => 'error', 'messages' => ['Passwords do not match']]);
        exit;
    }

    if (empty($_POST['terms'])) {
        echo json_encode(['status' => 'error', 'messages' => ['You must agree to our Terms and Conditions']]);
        exit;
    }

    if (empty($_POST['privacy'])) {
        echo json_encode(['status' => 'error', 'messages' => ['You must agree to our Privacy Policy']]);
        exit;
    }


    require_once "../../config/config.php";


    $check_email = $conn->prepare("SELECT COUNT(*) FROM users WHERE JSON_EXTRACT(account_info, '$.email') = ?");
    $check_email->bind_param("s", $email);
    $check_email->execute();
    $check_email->bind_result($email_count);
    $check_email->fetch();
    $check_email->close();

    if ($email_count > 0) {
        echo json_encode(['status' => 'error', 'messages' => ['Email already registered']]);
        exit;
    }

    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    $user_ip_address = $_SERVER['REMOTE_ADDR'];
    $browser = $_SERVER['HTTP_USER_AGENT'];
    $last_login_date = date('Y-m-d H:i:s');
    $usertype = 'user';

    $userinfo = json_encode([
        'firstname' => $first_name,
        'lastname' => $last_name,
        'email' => $email,
        'password' => $hashed_password,
        'usertype' => $usertype,
    ]);

    $query = "INSERT INTO users (account_info, finance_info, KYC_info, user_ip, last_login_ip, last_login_date, browser_data) 
          VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);

    if (!$stmt) {
        echo json_encode(['status' => 'error', 'messages' => ['Query preparation failed']]);
        exit;
    }

    $finance_info = NULL;
    $KYC_info = NULL;

    $stmt->bind_param(
        "sssssss",
        $userinfo,
        $finance_info,
        $KYC_info,
        $user_ip_address,
        $user_ip_address,
        $last_login_date,
        $browser
    );

    if (!$stmt->execute()) {
        echo json_encode(['status' => 'error', 'messages' => ['Failed to register user']]);
        exit;
    }

    $user_id = $conn->insert_id;
    $stmt->close();

    $_SESSION['user_id'] = $user_id;
    $_SESSION['user_name'] = $first_name . ' ' . $last_name;
    $_SESSION['user_email'] = $email;
    $_SESSION['user_type'] = $usertype;

    require_once "../../vendor/mailer.php";
    $subject = "Welcome to Our Platform";
    $message = "Hello $first_name,\n\nThank you for registering on our platform. We're excited to have you!";

    if (sendEmail($email, $subject, $message)) {
        $email_status = 'Registration successful and email sent';
    } else {
        $email_status = 'Registration successful, but failed to send welcome email';
    }

    echo json_encode(['status' => 'success', 'messages' => [$email_status]]);
} else if (isset($_POST['login_request']) && $_SERVER['REQUEST_METHOD'] === "POST") {
    session_start();
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $password = htmlspecialchars(trim($_POST['password'] ?? ''));

    // Input validation
    if (empty($email)) {
        echo json_encode(['status' => 'error', 'messages' => ['Email is required']]);
        exit;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'error', 'messages' => ['Invalid email format']]);
        exit;
    }

    if (empty($password)) {
        echo json_encode(['status' => 'error', 'messages' => ['Password is required']]);
        exit;
    }

    require_once "../../config/config.php";

    $query = "SELECT * FROM users WHERE JSON_EXTRACT(account_info, '$.email') = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'] ?? '';

        // Check if hashed_password is not empty before verifying
        if (!empty($hashed_password) && password_verify($password, $hashed_password)) {
            $_SESSION['user_id'] = $row['id'];
            $account_info = json_decode($row['account_info'], true);
            $_SESSION['user_name'] = $account_info['firstname'] . " " . $account_info['lastname'];
            $_SESSION['user_email'] = $account_info['email'];
            $_SESSION['user_type'] = $row['usertype'];

            // Update last login IP and date
            $last_login_ip = $_SERVER['REMOTE_ADDR'];
            $last_login_date = date('Y-m-d H:i:s');
            $update_query = "UPDATE users SET last_login_ip = ?, last_login_date = ? WHERE id = ?";
            $update_stmt = $conn->prepare($update_query);
            $update_stmt->bind_param("ssi", $last_login_ip, $last_login_date, $_SESSION['user_id']);
            $update_stmt->execute();
            $update_stmt->close();

            // Send login notification email
            require_once "../../vendor/mailer.php";
            $subject = "Login Notification - Welcome Back!";
            $message = "Hello {$account_info['firstname']},\n\nWelcome back to our platform!";
            sendEmail($account_info['email'], $subject, $message);

            echo json_encode(['status' => 'success', 'messages' => ['Login successful']]);
        } else {
            echo json_encode(['status' => 'error', 'messages' => ['Invalid email or password']]);
        }
    } else {
        echo json_encode(['status' => 'error', 'messages' => ['Invalid email or password']]);
    }

    // Close database connections
    $stmt->close();
    $conn->close();
}
