<?php
$name= $_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['Subject'];
$message=$_POST['Message'];

$email_from= 'info@yourwebsite.com';
$email_Subject='New Form Submission';
$email_body="User Name: $name.\n".
            "User Email: $visitor_email.\n".
            "Subject: $subject.\n".
            "User Message: $message.\n";

$to = 'ankush7431@gmail.com';
$headers= "From: $email_from \r\n";
$header.="Reply-To: $visitor_email \r\n";
mail($to,$email_Subject,$email_body,$headers);
header("Location:contact.html");

?>