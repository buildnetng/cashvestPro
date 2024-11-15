<?php
require_once "../../config/config.php";
// require_once "../../vendor/mailer.php";

if (isset($_POST['deposit_request']) && $_SERVER['REQUEST_METHOD'] == "POST") {
    session_start();
    $_SESSION['deposit'] = false;


    // Sanitize and validate inputs
    $cryptoAsset = $_POST['cryptoAsset'] ?? '';
    $amount = $_POST['amount'] ?? '';
    $walletAddress = $_POST['walletAddress'] ?? '';

    // Input validation
    if (empty($cryptoAsset)) {
        echo json_encode(['status' => 'error', 'messages' => ['Please select atleast one asset before proceding']]);
        exit;
    }


    if ($amount < 49)
        if (empty($amount) || !is_numeric($amount)) {
            echo json_encode(['status' => 'error', 'messages' => ['Minimum amount is $50']]);
            exit;
        }

    // Generate a transaction token
    function GenerateTransactionToken($length = 50)
    {
        return bin2hex(random_bytes($length / 2));
    }


    if (!isset($_SESSION['user_id'])) {
        echo json_encode(['status' => 'error', 'messages' => ['seems like your session has expired, please signout and signin again']]);
        exit;
    } else {
        $query = "INSERT INTO transactions (user_id, amount, crypto_asset_type, wallet_address, transaction_type, transaction_token, status) VALUES (?, ?, ?, ?, ?, ?, ?)";
        // Prepare and bind
        $stmt = $conn->prepare($query);
        if (!$stmt) {
            echo json_encode(['status' => 'error', 'messages' => ['Database error: Failed to prepare statement']]);
            exit;
        }

        $user_id = $_SESSION['user_id'];
        $deposit_amount = $amount;
        $crypto_asset_type = $cryptoAsset;
        $wallet_address = $walletAddress;
        $transaction_type = 'deposit';
        $transaction_token = GenerateTransactionToken(50);
        $status = 'pending';

        $stmt->bind_param("idsssss", $user_id, $deposit_amount, $crypto_asset_type, $wallet_address, $transaction_type, $transaction_token, $status);
        $_SESSION['deposit'] = true;
    }


    // Execute the statement
    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'messages' => ['Deposit successful']]);
        // Here you could send a confirmation email to the user
    } else {
        echo json_encode(['status' => 'error', 'messages' => ["Error: " . $stmt->error]]);
    }
}


// withdrawal request
if (isset($_POST['withdrawal_request']) && $_SERVER['REQUEST_METHOD'] == "POST") {
    session_start();


    // Sanitize and validate inputs
    $cryptoAsset = $_POST['cryptoAsset'] ?? '';
    $amount = $_POST['amount'] ?? '';
    $walletAddress = $_POST['walletAddress'] ?? '';

    // Input validation
    if (empty($cryptoAsset)) {
        echo json_encode(['status' => 'error', 'messages' => ['Please select atleast one asset before proceding']]);
        exit;
    }

    // Generate a transaction token
    function GenerateTransactionToken($length = 50)
    {
        return bin2hex(random_bytes($length / 2));
    }


    if (!isset($_SESSION['user_id'])) {
        echo json_encode(['status' => 'error', 'messages' => ['seems like your session has expired, please signout and signin again']]);
        exit;
    } else {
        $query = "INSERT INTO transactions (user_id, amount, crypto_asset_type, wallet_address, transaction_type, transaction_token, status) VALUES (?, ?, ?, ?, ?, ?, ?)";
        // Prepare and bind
        $stmt = $conn->prepare($query);
        if (!$stmt) {
            echo json_encode(['status' => 'error', 'messages' => ['Database error: Failed to prepare statement']]);
            exit;
        }

        $user_id = $_SESSION['user_id'];
        $deposit_amount = $amount;
        $crypto_asset_type = $cryptoAsset;
        $wallet_address = $walletAddress;
        $transaction_type = 'withdrawal';
        $transaction_token = GenerateTransactionToken(50);
        $status = 'pending';

        $stmt->bind_param("idsssss", $user_id, $deposit_amount, $crypto_asset_type, $wallet_address, $transaction_type, $transaction_token, $status);
        $_SESSION['deposit'] = true;
    }


    // Execute the statement
    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'messages' => ['Deposit successful']]);
        // Here you could send a confirmation email to the user
    } else {
        echo json_encode(['status' => 'error', 'messages' => ["Error: " . $stmt->error]]);
    }
}



if (isset($_POST['update_request']) && $_SERVER['REQUEST_METHOD'] == "POST") {

    // Sanitize and validate inputs
    $fullname = htmlspecialchars(trim($_POST['fullname'] ?? ''));
    $gender = htmlspecialchars(trim($_POST['gender'] ?? ''));
    $phoneNumber = htmlspecialchars(trim($_POST['phone_number'] ?? ''));
    $address = htmlspecialchars(trim($_POST['address'] ?? ''));
    $country = htmlspecialchars(trim($_POST['country'] ?? ''));
    $userId = htmlspecialchars(trim($_POST['user_id'] ?? ''));

    // Check required fields
    if (empty($fullname)) {
        echo json_encode(['status' => 'error', 'messages' => ['Full name is required']]);
        exit;
    }

    // Split fullname into first and last names
    $nameParts = explode(" ", $fullname);
    $first_name = $nameParts[0];
    $last_name = $nameParts[1] ?? '';

    if (empty($first_name) || empty($last_name)) {
        echo json_encode(['status' => 'error', 'messages' => ['Full name must include both first and last names']]);
        exit;
    }

    if (empty($gender)) {
        echo json_encode(['status' => 'error', 'messages' => ['Please select a gender']]);
        exit;
    }

    if (empty($phoneNumber)) {
        echo json_encode(['status' => 'error', 'messages' => ['Phone number is required']]);
        exit;
    }

    if (empty($address)) {
        echo json_encode(['status' => 'error', 'messages' => ['Address is required']]);
        exit;
    }

    // Handle the image file upload if provided
    $imagePath = null;
    if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['profile_image']['tmp_name'];
        $fileName = $_FILES['profile_image']['name'];
        $fileSize = $_FILES['profile_image']['size'];

        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

        if (!in_array($fileExtension, $allowedExtensions) || $fileSize > 2 * 1024 * 1024) {
            echo json_encode(['status' => 'error', 'messages' => ['Invalid image format or size']]);
            exit;
        }

        $newFileName = uniqid('profile_', true) . '.' . $fileExtension;
        $uploadDir = '../../uploads/profile_images/';
        $imagePath = $uploadDir . $newFileName;

        if (!move_uploaded_file($fileTmpPath, $imagePath)) {
            echo json_encode(['status' => 'error', 'messages' => ['Error uploading the image']]);
            exit;
        }
    }


    $user_ip_address = $_SERVER['REMOTE_ADDR'];
    $browser = $_SERVER['HTTP_USER_AGENT'];
    $last_login_date = date('Y-m-d H:i:s');
    $KYCInfo = null;
    $financeInfo = null;

    try {


        $query = "UPDATE users SET 
                params = JSON_SET(params, 
                                  '$.firstname', :firstname, 
                                  '$.lastname', :lastname, 
                                  '$.gender', :gender,
                                  '$.phone_number', :phone_number, 
                                  '$.address', :address, 
                                  '$.country', :country, 
                                  '$.profile_image', :profile_image, 
                                  ) 
              WHERE user_id = :id";



        $stmt = $conn->prepare($query);

        if (!$stmt) {
            throw new Exception("Failed to prepare statement.");
        } else {
            // Bind parameters
            $stmt->bindParam(':firstname', $first_name);
            $stmt->bindParam(':lastname', $last_name);
            $stmt->bindParam(':gender', $gender);
            $stmt->bindParam(':phone_number', $phoneNumber);
            $stmt->bindParam(':address', $address);
            $stmt->bindParam(':country', $country);
            $stmt->bindParam(':profile_image', $imagePath);
            $stmt->bindParam(':id', $userId);



            if ($stmt->execute()) {
                echo json_encode(['status' => 'success', 'messages' => ['User information updated successfully']]);
            } else {
                echo json_encode(['status' => 'error', 'messages' => ['Error updating user information']]);
            }
        }

    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'messages' => ['Database error: ' . $e->getMessage()]]);
    }
}










