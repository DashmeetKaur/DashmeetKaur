<?php  
	if(isset($_GET['name'])) {
		$name =  $_GET['name'];
		$email = $_GET['email'];
		$subject = $_GET['subject'];
		$message = $_GET['message'];
		$formattedMessage = $message. '\n '.$name;
		$recipient = 'dashmeetkaur11@gmail.com';
		$headers = 'From: '.$email . "\r\n" .
    'Reply-To: '.$recipient;
    	mail($recipient,$subject,$formattedMessage,$headers)or die('Error!');
		return 'OK';
	}
	else{
		return 'Something went wrong!';
	}

?>