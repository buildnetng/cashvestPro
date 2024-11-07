<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "cashvest";

$conn = new mysqli($hostname, $username, $password, $database);
if ($conn->connect_error) {
    echo json_encode(['status' => 'error', 'messages' => ['Database connection failed']]);
    exit;
}
