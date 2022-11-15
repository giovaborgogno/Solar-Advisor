<?php

echo json_encode(false);
die();


var_dump($_POST);


$firstn = $_POST['firstn'];
$lastn = $_POST['lastn'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$data="First Name: $firstn \n Last Name: $lastn \n Email: $email \n Subject: $subject \n Phone: $phone \n Message: $message";



$repply = $email;

require_once('phpmailer/class.phpmailer.php');
require_once('phpmailer/class.smtp.php');
$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'c1310741.ferozo.com';
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->Username = "newlead@solaradvisor.us";
$mail->Password = "xUzPQD*5bW";
$mail->CharSet = "UTF-8";
$mail->SetFrom($repply);
$mail->AddReplyTo($repply);
$mail->Subject = "Nuevo lead ";
$mail->AltBody = "Para ver este mensaje, por favor habilite las imágenes y el contenido HTML.";
$mail->MsgHTML($data . "<br>PREGUNTA:<br>" . $message);
/* $mail->AddAddress("facu.tha@gmail.com");
$mail->AddAddress("wilson@solaradvisor.us"); */
$mail->AddAddress("giovaborgogno@gmail.com");
$response = $mail->Send();

if(function(){
    
})
?>
