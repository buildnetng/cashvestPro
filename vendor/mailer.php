<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'autoload.php'; // Ensure this path is correct

function sendEmail($subject, $email, $message_content)
{
    // SMTP configuration
    $smtp_host = "smtp.gmail.com";
    $smtp_port = 465; 
    $smtp_user = "stellarfreights@gmail.com";
    $smtp_password = "wibgvbueauhyusim";
    $smtp_secure = "ssl"; 
    $smtp_from = "support@stellarfreights.com";
    $smtp_from_name = "Charity";

    $mailmessage = $message_content;

    $site_logo_path = "https://stellarfreights.com/assets/img/logo.png";
    $site_title = "Stellar Freights";
    $message = '
        
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&amp;display=swap" rel="stylesheet">

    <style>

        body {
            font-family: Poppins !important;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        p {
        font-family: Poppins !important;
        }

        .email-container {
            background-color: #f5f5f5 !important;
            
            justify-content: center;
            width: 80%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .email-header {
            text-align: center;
            padding: 10px 0;
        }
        .email-header img {
            max-width: 150px;
            height: auto;
        }
        .email-content {
            padding: 20px;
            color: #333333;
            line-height: 1.6;
        }
        .email-footer {
            margin-top: 20px;
            text-align: center;
            color: #777777;
            font-size: 12px;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #0044cc;
            color: #ffffff;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="email-container card">
        <div class="email-header">
            <img src="' . $site_logo_path . '" alt="' . $site_title . '">
        </div>
        <div class="email-content">
            <p>' . $mailmessage . '</p>
        </div>
        <div class="email-footer">
             &copy; ' . date("Y") . ' | ' . $site_title . '
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>

    ';

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = $smtp_host;
        $mail->SMTPAuth = true;
        $mail->Username = $smtp_user; 
        $mail->Password = $smtp_password; 
        $mail->SMTPSecure = $smtp_secure; 
        $mail->Port = $smtp_port; 

        $mail->SMTPDebug = 0; 

        $mail->setFrom($smtp_from, $smtp_from_name); 
        $mail->addAddress($email); 
        $mail->addReplyTo($smtp_from); 

        $mail->isHTML(true); 
        $mail->Subject = $subject;
        $mail->Body = $message;

        $mail->send();
        return 'success'; 
    } catch (Exception $e) {
        return "Error: " . $e->getMessage(); 
    }
}

?>