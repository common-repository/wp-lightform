<?php
	//Who do you want to be the recipient of the contact form
	$to = 'you@youremail.com';

	//This file is responsible for sending the email, you shouldn't need to edit it beyond here.

	//User info (DO NOT EDIT!)
	$name = stripslashes($_POST['name']); //sender's name
	$email = stripslashes($_POST['fromemail']); //sender's email
	$website = stripslashes($_POST['website']); //sender's website

	//The subject
	$subject = '[' . stripslashes($_POST['blogname']) . ' WP-LightForm] '; //Subject will include your blogs title for easy recognition.
	$subject .= stripslashes($_POST['subject']); // the subject
	$message = stripslashes($_POST['message']);

	//The message you will receive in your mailbox
	//Each parts are commented to help you understand what it does exaclty.
	//YOU DON'T NEED TO EDIT IT BELOW BUT IF YOU DO, DO IT WITH CAUTION!
	
	// create proper headers so non-ascii characters are displayed properly
	$headers = "Content-Type: text/plain; charset=utf-8; format=flowed\r\n"
	. "Content-Transfer-Encoding: 8bit\r\n"
    . "MIME-Version: 1.0\r\n"
	. "From: $email\r\n"
	. "Reply-To: $email\r\n"
	. "Return-Path: $email\r\n";

	$msg  = "From : $name\r\n";  //add sender's name to the message
	$msg .= "e-Mail : $email\r\n";  //add sender's email to the message
	$msg .= "Website : $website\r\n"; //add sender's website to the message
	$msg .= "Subject : $subject\r\n\n"; //add subject to the message (optional! It will be displayed in the header anyway)
	$msg .= "---Message---\r\n$message\r\n\n";  //the message itself

	//Extras: User info (Optional!)
	//Delete this part if you don't need it
	//Display user information such as Ip address and browsers information...
	$msg .= "---User information---\r\n"; //Title
	$msg .= "User IP : ".$_SERVER["REMOTE_ADDR"]."\r\n"; //Sender's IP
	$msg .= "Browser info : ".$_SERVER["HTTP_USER_AGENT"]."\r\n"; //User agent
	$msg .= "User came from : ".$_SERVER["HTTP_REFERER"]; //Referrer

	if (@mail($to, $subject, $msg, $headers)) {
		echo "<div class=\"msgsent\">
			<h2>Success!!!</h2><br />
			<p>Thank you <b>$name</b>, your message is sent!<br /> I will get back to you as soon as possible.</p>
		</div>";
	}
	else {
		echo "<div class=\"msgerror\">
			<h2>Epic Fail!!!</h2><br />
			<p>Sorry <b>$name</b>, your message failed to send. Try later!</p>
		</div>";
	}
?>