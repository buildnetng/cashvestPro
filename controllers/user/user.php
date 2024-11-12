<?php
require_once "config/config.php";

// Define the query with LIMIT 1
$query = "SELECT `user_id`, `account_info`, `finance_info`, `KYC_info`, `user_ip`, `last_login_ip`, `last_login_date`, `browser_data` FROM `users` LIMIT 1";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$user = mysqli_fetch_assoc($result);

// Decode JSON fields only if they are not NULL
$user['account_info'] = !empty($user['account_info']) ? json_decode($user['account_info'], true) : null;
$user['finance_info'] = !empty($user['finance_info']) ? json_decode($user['finance_info'], true) : null;
$user['KYC_info'] = !empty($user['KYC_info']) ? json_decode($user['KYC_info'], true) : null;

// Store individual values in variables if they exist
$email = isset($user['account_info']['email']) ? $user['account_info']['email'] : null;
$account_type = isset($user['account_info']['account_type']) ? $user['account_info']['account_type'] : null;

// $balance = isset($user['finance_info']['balance']) ? $user['finance_info']['balance'] : null;
// $currency = isset($user['finance_info']['currency']) ? $user['finance_info']['currency'] : null;

// $kyc_status = isset($user['KYC_info']['status']) ? $user['KYC_info']['status'] : null;
// $last_verified = isset($user['KYC_info']['last_verified']) ? $user['KYC_info']['last_verified'] : null;

