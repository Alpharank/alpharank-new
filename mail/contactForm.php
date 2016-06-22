<?php

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$company = $_POST['company'];
	$message = $_POST['message'];
	$hpot = $_POST['hpot'];
	$huch = $_POST['huch'];
	$user_email = $_POST['user_email'];
	$user_email = $_POST['user_email'];

	if( filter_var($email, FILTER_VALIDATE_EMAIL) && 
		!empty($name) && 
		!empty($message) && 
		( (strlen($name) <= 15) && (strlen($email) <= 30) && (strlen($message) <= 1000) ) &&
		$hpot == "http://" &&
		$huch == "" &&
		!($user_email)
	  ){
		  	$email_add = "brianley@alpharank.io";
		  // brian email brianley@alpharank.io
			$subject = "From AlphaRank Website Contact Form";
			$body = "\n From:  ". $name . 
					"\n Email Address:  ". $email .
					"\n Phone:  ". $phone .
					"\n Company:  ". $company .
					"\n\n Message: ". $message;
			$headers = "From :".$email;
			mail($email_add, $subject, $body) or die("Error!");
			header("Location:http://www.alpharank.io/thank-you.html");
			exit;
		}
	else{
		header("Location:http://www.alpharank.io/sending-error.html");
		
		exit;
	}

?>