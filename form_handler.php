<?php
$name=$_POST['name'];
$user_email=$_POST['user_email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$email_from='infodesk@gmail.com';
$email_subject='New form submission';
$email_body="User Name: $name.\n".
              "User Email: $user_email.\n".
                 "User Subject: $subject.\n".
                 "User Message: $message.\n";
$to= 'professor@gmail.com';
$headers="From: $email_from \r\n";
$headers .="Reply-To: $user_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");
?>