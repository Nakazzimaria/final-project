<?php
$name=$_POST['name'];
$vistor_email=$_POST['email'];
$message=$_POST['message'];

$email_from='katnik256@gmail.com';
$email_subject="new form submission";
$email_body="user name: $name.\n".
"User Email:$vistor_email.\n".
"User Message: $message.\n";

$to="katnik256@gmail.com";
$headers="From: $email_from\r\n";
$headers="Reply_To: $visitor_email\r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location:index.html");
?>