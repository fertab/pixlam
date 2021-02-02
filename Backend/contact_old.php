<?php

if(isset($_POST['email']) && $_POST['email'] != '') {

    if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){

        //submit the form
        $userName = $_POST['name'];
        $userEmail = $_POST['email'];
        $userMessage = $_POST['message'];

        $to = "info@pixlam.com";
        $body = "";

        $body .= "From: ".$userName. "\r\n";
        $body .= "From: ".$userEmail. "\r\n"; 
        $body .= "From: ".$userMessage. "\r\n";

        //mail($to,$body);

        $message_sent = true;

    }

}

?>

