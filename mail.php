<?php
$name = $_POST['name'];
$VisitorMail = $_POST['email'];
$message= $_POST['subject']. "\r\n" .$_POST['message'];

$email_from = "ishanavishka14@gmail.com";
$email_subject = "New Form submission";
$email_body = "You have recieved a new message from the user ".$name."\n email address: ".$VisitorMail."\n Here is the message: \n".$message;

$to = "ishanavishka14@gmail.com";
$headers = "From: ".$email_from."\r\n";

mail($to,$email_subject,$email_body,$headers);

echo "succesfull!";
?>