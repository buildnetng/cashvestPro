<?php
session_start();

$hostURL = (isset($_SERVER['HTTPS']) ? 'https://' : 'http://') . ($_SERVER['HTTP_HOST'] == 'localhost' ? 'localhost/new_dashboard_hush/' : $_SERVER['HTTP_HOST']);

$current_page = (isset($_SERVER['HTTPS']) ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER["REQUEST_URI"];
$parsed_url = parse_url($current_page);
$current_path = isset($parsed_url['path']) ? $parsed_url['path'] : '';
$last_segment = basename($current_path);

if (!isset($_SESSION["online"])) {
    if ($last_segment !== "sign-up" && $last_segment !== "sign-in") {
        header("Location: sign-in" . ($current_page != $hostURL ? "?rd=" . $last_segment : ''));
    }
} else {
    $auth_segments = [
        "sign-up",
        "sign-in",
        "reset-password",
        "verify-email",
        "forgot-password",
        "update-password"
    ];

    if (in_array($last_segment, $auth_segments)) {
        header("Location: " . $hostURL);
        exit;
    } else {
    }
}


require_once "controllers/user/user.php";

// if (isset($admin) && $admin) {
//     if (!$user["admin"]) {
//         header("Location: home");
//         exit;
//     } else {
//         require_once "actions/admin.php";
//     }
// }


// if (!$user["admin"]) {

//     if (!$user["active"]) {
//         header("Location: suspended");
//     }

//     if(!isset($email_verification)){
//         if(!$user["email_verified"]){
//             header("Location: verify-email");
//         }
//     }

//     if(!isset($profile)){
//         if(!$user["profile_updated"]){
//             header("Location: profile");
//         }
//     }
// }
