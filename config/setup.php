<?php
require_once 'config.php';  

// Fetch site setup settings from the database
$sql = "SELECT * FROM setup LIMIT 1";
$site = $conn->prepare($sql);

if ($site) {
    $site->execute();
    $site = $site->get_result();
    $site = $site->fetch_assoc();

    // Validate the base URL from the database against the environment
    $base_url = $site['base_url']; // Assuming this field is in the 'setup' table
    if ($_SERVER['HTTP_HOST'] == 'localhost' && strpos($base_url, 'localhost') === false) {
        die("Error: The base URL in the database does not match the local environment.");
    } elseif ($_SERVER['HTTP_HOST'] != 'localhost' && strpos($base_url, 'localhost') !== false) {
        die("Error: The base URL in the database is incorrect for the production environment.");
    }

    // Assign other site settings
    $site_title = $site['site_title'];
    $site_url = $site['site_url'];
    $site_logo = $site['site_logo'];
    $meta_keywords = $site['meta_keywords'];
    $meta_desc = $site['meta_desc'];
    $gmail_account = $site['gmail_account'];
    $gmail_password = $site['gmail_password'];
    $email_address = $site['email_address'];
    $sent_from_address = $site['sent_from_address'];
    $reply_to_address = $site['reply_to_address'];
    $enabled_withdrawal = $site['enabled_withdrawal'];
    $enabled_deposit = $site['enabled_deposit'];
} else {
    error_log("Error preparing the database query.");
    die("An error occurred. Please try again later.");
}

// Close the database connection
$conn->close();
