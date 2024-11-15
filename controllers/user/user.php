<?php
require_once "config/config.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: sign-in.php");
    exit;
}
$user_id = $_SESSION['user_id'];
$query = "SELECT account_info, finance_info, KYC_info, user_ip, last_login_ip, last_login_date, browser_data 
          FROM users WHERE user_id = ? LIMIT 1";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $user_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$user = mysqli_fetch_assoc($result);

$user['account_info'] = !empty($user['account_info']) ? json_decode($user['account_info'], true) : null;
$user['finance_info'] = !empty($user['finance_info']) ? json_decode($user['finance_info'], true) : null;
$user['KYC_info'] = !empty($user['KYC_info']) ? json_decode($user['KYC_info'], true) : null;

$email = isset($user['account_info']['email']) ? $user['account_info']['email'] : null;
$account_type = isset($user['account_info']['account_type']) ? $user['account_info']['account_type'] : null;
$firstname =  isset($user['account_info']['firstname']) ? $user['account_info']['firstname'] : '';
$lastname =  isset($user['account_info']['lastname']) ? $user['account_info']['lastname'] : '';

$fullname = $firstname . ' ' . $lastname


?>