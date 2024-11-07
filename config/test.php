<?php
session_start();

if (isset($_POST['registration_request']) && $_SERVER['REQUEST_METHOD'] == "POST") {

    function sanitizeInput($data)
    {
        return htmlspecialchars(trim((string)$data));
    }

    function validateRequired($field, $fieldName)
    {
        if (empty($field)) {
            return "$fieldName is required";
        }
        return null;
    }

    function validateEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return "Invalid email format";
        }
        return null;
    }

    function validatePassword($password, $confirmPassword)
    {
        if (strlen($password) < 8) {
            return "Password must be at least 8 characters long";
        }
        if ($password !== $confirmPassword) {
            return "Passwords do not match";
        }
        return null;
    }

    $fullname = sanitizeInput($_POST['fullname']);
    $email = sanitizeInput($_POST['email']);
    $password = sanitizeInput($_POST['password']);
    $confirm_password = sanitizeInput($_POST['confirm_password']);

    $nameParts = explode(" ", $fullname);
    $first_name = (string)$nameParts[0];
    $last_name = isset($nameParts[1]) ? (string)$nameParts[1] : '';

    $errors = [];
    $errors[] = validateRequired($fullname, 'Full name');
    $errors[] = validateRequired($first_name, 'First name');
    $errors[] = validateRequired($last_name, 'Last name');
    $errors[] = validateRequired($email, 'Email');
    $errors[] = validateEmail($email);
    $errors[] = validateRequired($password, 'Password');
    $errors[] = validatePassword($password, $confirm_password);

    $errors = array_filter($errors);

    if (count($errors) > 0) {
        echo json_encode(['status' => 'error', 'messages' => $errors]);
        exit;
    }

    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    $user_ip_address = (string)$_SERVER['REMOTE_ADDR'];
    $browser = (string)$_SERVER['HTTP_USER_AGENT'];

    $last_login_date = date('Y-m-d H:i:s');

    $usertype = 'user';

    $userinfo = [
        'firstname' => $first_name,
        'lastname' => $last_name,
        'email' => $email,
        'password' => $hashed_password,
        'usertype' => $usertype
    ];

    $finance_info = NULL;
    $KYC_info = NULL;
    $userinfo_json = json_encode($userinfo);

    $query = "INSERT INTO users (account_info, finance_info, KYC_info, user_ip, last_login_ip, last_login_date, browser_data) 
              VALUES (?, ?, ?, ?, ?, ?, ?)";

    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param("sssssss", $userinfo_json, $finance_info, $KYC_info, $user_ip_address, $last_login_date, $browser);
        if ($stmt->execute()) {
            $_SESSION['user_id'] = $conn->insert_id;
            $_SESSION['user_name'] = $first_name . ' ' . $last_name;
            $_SESSION['user_email'] = $email;
            $_SESSION['user_type'] = $usertype;

            // Send the welcome email
            $subject = "Welcome to Our Platform";
            $message = "Hello " . $first_name . ",\n\nThank you for registering on our platform. We're excited to have you!";

            if (mail($email, $subject, $message)) {
                echo json_encode(['status' => 'success', 'messages' => ['Registration successful and email sent']]);
            } else {
                echo json_encode(['status' => 'success', 'messages' => ['Registration successful, but failed to send welcome email']]);
            }
        } else {
            echo json_encode(['status' => 'error', 'messages' => ['Failed to register user']]);
        }

        $stmt->close();
    } else {
        echo json_encode(['status' => 'error', 'messages' => ['Database query failed']]);
    }
}
