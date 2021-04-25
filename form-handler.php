<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];

$email_from = 'aparnajay02@gmail.com';
$email_subject = 'New Form submission';
$email_body = "User Name: $name.\n".
                  "User Email: $visitor_email.\n".
                  "User Number: $number.\n".
                  "User Message: $message.\n";

$to = 'aparnajay02@gmail.com';
$headers = "From: $email_from \r\n";
$headers .="Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: contact1.html");

?>