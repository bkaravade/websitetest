<?php
echo("feedback.php");
if(isset($_POST['submit'])){
	$name = $_POST['nme'];
	$emailFrom = $_POST['mail'];
	$message = $_POST['msg'];
	$emailTo = "ballalkech@gmail.com";
	$subject = "feedback";

	$header = "From: ".$emailFrom.".";

	echo("name ". $name);
	echo("\nmail ". $email);
	echo("\nmessage ". $message);
	
	if(mail($emailTo, $subject, $message, $header)){
		echo("successfull");
	}
	else {
		echo("error");
	}


}



?>