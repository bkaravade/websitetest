<?php
echo("feedback.php");
if(isset($_POST['submit'])){
	require 'phpmailer/PHPMailerAutoload.php';

	$name = $_POST['nme'];
	$emailFrom = $_POST['mail'];
	$message = $_POST['msg'];
	$emailTo = "ballalkech@gmail.com";
	$subject = "feedback";

	$header = "From: ".$emailFrom.".";


	$mail = new PHPMailer;

	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	$mail->SMTPAuth = true;
	$mail->SMTP = 'tls';
	$mail->Usernmae = '';
	$mail->Password = '';

	$mail->setFrom($emailFrom, $name);
	$mail->addAddress('');
	$mail->addReplyTo($emailFrom, $name); 

	$mail->isHTML(true);
	$mail->Subject = $subject;
	$mail->Body = '<h1 align = center>Name: '.$name.'<br> Email: '.$emailFrom.'<br>Message :'.$message.'</h1>';

	if(!$mail->send()){
		echo("error");
	}
	else{
		echo("successfull");
	}

	

	echo("name ". $name);
	echo("\nmail ". $email);
	echo("\nmessage ". $message);
	
	// if(mail($emailTo, $subject, $message, $header)){
	// 	echo("successfull");
	// }
	// else {
	// 	echo("error");
	// }


}



?>