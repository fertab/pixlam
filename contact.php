<?php

error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

    $to = 'info@pixlam.com'; // this is your Email address
    $email = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $message = $name . " " . " wrote the following:" . "\n\n" . $_POST['message'];
    $aditional_headers = array ("From:" . $email , "Reply-To:" . $email . "X-Mailer: PHP/" . PHP_VERSION);


    if ($_POST['message']) {
    mail('info@pixlam.com',$message,[$aditional_headers]);
    header('Location: greet.html');
    }

?>
