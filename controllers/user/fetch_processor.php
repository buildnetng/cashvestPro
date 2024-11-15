<?php
require_once "../../config/config.php";

header('Content-Type: application/json');

// // Simulated response
// $data = ['status' => 'success', 'data' => 'This is the fetched data.'];
// echo json_encode($data);

session_start();

if (!isset($_SESSION['user_id'])) {

    echo json_encode(['status' => 'error', 'messages' => ['seems like your session has expired, please signout and signin again']]);

}else{

$user_id  = $_SESSION['user_id'];
    $query = "SELECT * FROM users WHERE user_id = ?";

    $stmt = $conn->prepare($query);
    if (!$stmt) {
        echo json_encode(['status' => 'error', 'messages' => ['Database error: Failed to prepare statement']]);
        exit;
    }


    $stmt->execute($user_id);
    $result = $stmt->fetch();

    if ($result) {
        echo json_encode(['status' => 'success', 'messages' => ['User fetched successful'], 'data' => $result]);
    } else {
        echo json_encode(['status' => 'error', 'messages' => ['Failed to get user details']]);
    }

}