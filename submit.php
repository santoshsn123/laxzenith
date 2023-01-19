<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['address'];
$subject = $_POST['subject'];
$body = $_POST['Message'];

$to = "santosh.narawade1@gmail.com";
$subject = "LaxZenith :: Contact Us for Filled ". $subject;

$headers = "From: ".$email . "\r\n" ;
// "CC: somebodyelse@example.com";
$body  = $body.' Phone : '.$phone;

mail($to,$subject,$body,$headers); 
header('location:contactus.html');

?>