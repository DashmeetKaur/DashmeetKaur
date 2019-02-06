<?php  
	if(isset($_POST['name'])) {
		$name =  $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		$formattedMessage = $message. '\n '.$name;
		$recipient = 'dashmeetkaur11@gmail.com';
		$headers = 'From: '.$email . "\r\n" .
    'Reply-To: '.$recipient . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
		mail($recipient,$subject,$formattedMessage,$headers)or die('Error!');
		return 'OK';
	}
	else{
		return 'Something went wrong!';
	}

?>