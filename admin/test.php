<?php
require_once("PHPMailer/class.phpmailer.php");

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = 'login';
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->Username = 'man0551hk@gmail.com';
$mail->Password = '78134698';
$mail->SetFrom('man0551hk@gmail.com', 'Jerry');
$mail->Subject = 'The subject';
$mail->Body = 'The content';
$mail->AddAddress('man0551hk@gmail.com');

if(!$mail->Send())
{
	echo $mail->ErrorInfo;
}
else
{
	echo "Sent";
}
?>