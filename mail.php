<?php
if(isset( $_POST['fname']))
$fname = $_POST['fname'];
if(isset( $_POST['lname']))
$lname = $_POST['lname'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['message']))
$message = $_POST['message'];
if(isset( $_POST['company']))
$company = $_POST['company'];

$content="From: $fname $lname $company \n Email: $email \n Message: $message";
$recipient = "xarodasimba@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $company, $content, $mailheader) or die("Error!");
echo "Email sent!";
?>
