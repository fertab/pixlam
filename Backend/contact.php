<?php

    $to = 'info@pixlam.com'; // this is your Email address
    $email = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $message = $name . " " . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $email;
    mail($to,$message,$headers);
    
?>
