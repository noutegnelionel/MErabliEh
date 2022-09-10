<?php
if(isset( $_POST['email']))
$email = $_POST['email'];

$content="Email: $email";
$recipient = "noutegnelionel@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient,$email, $content, $mailheader) or die("Error!");
echo "Email sent!";
?>