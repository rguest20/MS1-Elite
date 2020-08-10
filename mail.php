<?php
  $name = $_POST["yourname"];
  $email = $_POST["email"];
  $whichpage = $_POST["whichpage"];
  $whatwrong = $_POST["whatwedid"];
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "info@r-guest-developer.world";
    $to = $email . ", info@r-guest-developer.world";
    $subject = "HINTWIZ request for update recieved";
    $message = "Dear " . $name . ", \r\n Thank you for your message. We have received the following information from you and will review your update request soon.\r\n Page request for: " . $whichpage . "\r\n Request as follows:" . $whatwrong . "\r\n \r\n \r\n HINTWIZ";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";
?>
