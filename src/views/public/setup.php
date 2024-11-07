<?php
// config.setup.php

// Database connection parameters
$hostname = "localhost";
$username = "root";
$password = "";
$database = "cashvest";

// Create the database connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch site setup data from the database
$query = "SELECT * FROM site_setup WHERE id = 1 LIMIT 1";  // Assuming there's only one row of configuration data
$result = $conn->query($query);

if ($result && $result->num_rows > 0) {
    // Fetch data from the database
    $row = $result->fetch_assoc();

    // Define constants from the database values
    define('BASE_URL', $row['base_url']);
    define('PUBLIC_URL', $row['public_url']);
    define('SITE_TITLE', $row['site_title']);
    define('SITE_URL', $row['site_url']);
    define('SITE_LOGO', $row['site_logo']);
    define('META_KEYWORDS', $row['meta_keywords']);
    define('META_DESC', $row['meta_desc']);
    define('GMAIL_ACCOUNT', $row['gmail_account']);
    define('GMAIL_PASSWORD', $row['gmail_password']);
    define('EMAIL_ADDRESS', $row['email_address']);
    define('SENT_FROM_ADDRESS', $row['sent_from_address']);
    define('REPLY_TO_ADDRESS', $row['reply_to_address']);
    define('ENABLED_WITHDRAWAL', $row['enabled_withdrawal']);
    define('ENABLED_DEPOSIT', $row['enabled_deposit']);
} else {
    die("Failed to fetch site settings.");
}

// Optionally, you can close the connection if you're done with the database
$conn->close();
