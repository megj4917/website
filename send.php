<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$email_from = 'meganjacocb2004@yahoo.com';

	$email_subject = "New Contact Form Submission";

	$email_body = "Name: $name.\n".
				  "Email: $email.\n".
				  "Message: $message.\n";

	$email_to = 'meganjacob2004@yahoo.com';

	$headers = "From: $email_from \r\n";
	$headers = "Reply-To: $visitor_email \r\n";

	mail($email_to,$email_subject,$email_body, $headers);

	header("Location: contact.html");
?>
