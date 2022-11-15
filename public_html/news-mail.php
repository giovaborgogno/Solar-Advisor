<?php
$email = $_POST['email'];

$formcontent="Email: $email";
$recipient = "wilson@solaradvisor.us";
$subject = "Newslater Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
require_once "thank-you.html";
?>