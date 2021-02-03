 <?php
    if(isset($_POST['email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $to = "fer.tab86@gmail.com";
    

    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you
       submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }

   // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you 
    submitted.');      
    }

    $name = $_POST['name']; // required
    $email = $_POST['email']; // required
    $message = $_POST['message']; // required

    $error_message = "";
    $string_exp = "/^[A-Za-z0-9 .'-]+$/";
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
  } 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
  if(!preg_match($string_exp,$message)) {
    $error_message .= 'The message you entered does not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Response from Mailing List Page.  Please enter in database.\n\n";

    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";


// create email headers
$headers = 'From: '.$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($to, $message, $headers);
header('Location: greet.html');

?>

<?php
}
?>