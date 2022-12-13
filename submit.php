<?php

$name = $_POST['name'];
$email = $_POST['email'];
$body = $_POST['subject'];

$to = "santosh.narawade1@gmail.com";
$subject = "LaxZenith :: Contact Us for Filled";
$txt = "Hello world!";
$headers = "From: ".$email . "\r\n" ;
// "CC: somebodyelse@example.com";

mail($to,$subject,$body,$headers); 
header('location:index.html');

?>