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
