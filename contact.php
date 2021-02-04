<?php

error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

    $to = 'info@pixlam.com'; // this is your Email address
    $email = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $message = $name . " " . " wrote the following:" . "\n\n" . $_POST['message'];
    $headers = "From: $email";
    $headers .= "Reply-To: $email";
    $headers .= "X-Mailer: PHP/" . PHP_VERSION;


    mail($to,$message,$headers);
    header('Location: greet.html');


?>
