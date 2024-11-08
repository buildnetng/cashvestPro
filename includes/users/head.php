<?php require_once 'config/config.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Purpose Application UI is the following chapter we've finished in order to create a complete and robust solution next to the already known Purpose Website UI.">
    <meta name="author" content="Webpixels"> 
    <title>Purpose &ndash; Application UI Kit</title>
    <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
    <link rel="stylesheet" href="assets/libs/@fortawesome/fontawesome-pro/css/all.min.css">
    <link rel="stylesheet" href="assets/libs/fullcalendar/dist/fullcalendar.min.css">
    <link rel="stylesheet" href="assets/css/purpose.css" id="stylesheet">
    <!-- iziToast Library -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/izitoast/dist/css/iziToast.min.css">
    <script src="https://cdn.jsdelivr.net/npm/izitoast/dist/js/iziToast.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        h4,
        .h2 {
            color: #333;
            font-weight: 600;
            font-size: 14px;
        }



        .nav-application>.btn.active {
            background-color: #6300e6 !important;
            color: white !important;
        }

        .nav-application>.btn-square {
            background-color: #6a03b6;
            color: white !important;
        }

        .button_default {
            background-color: #6300e6 !important;
            border: none;
            padding: 12px 30px;
            border-radius: 30px;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .button_default:hover {
            background-color: #4a00b3;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
            transform: translateY(-2px);
        }

        .button_default:active {
            background-color: #3b0093;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
            transform: translateY(1px);
        }

        tr {
            border: none !important;
        }
    </style>
</head>