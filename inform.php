<?php
echo("inform.php");
if(isset($_POST['submit'])){
	$name = $_POST['inform-nme'];
	$emailFrom = $_POST['inform-mail'];
	$phone = $_POST['inform-phn'];
	$address = $_POST['inform-add'];
	
	$message = " Name: ".$name."\n Phone Number is: ".$phone."\nAddress is: ".$address;
	
	$emailTo = "ballalkech@gmail.com";

	$subject = "Inviting you to take a way!!";

	echo("name ". $name);
	echo("\nmail ". $emailFrom);
	echo("\nssmessage ". $message);

	if(mail($emailTo, $subject, $message)){
		echo("successfull");
	}
	else {
		echo("error");
	}

}

?>