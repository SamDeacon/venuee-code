<?php
$emailTo = "venueeapp@gmail.com";
$subject = "Contact Form: ";

if(isset($_POST['email']) && isset($_POST['name']) && isset($_POST['message']))
{
	$email = $_POST['email'];
	$name = $_POST['name'];
	$message = $_POST['message'];
	
	//$name = htmlspecialchars($name, ENT_QUOTES);
	//$message = htmlspecialchars($message, ENT_QUOTES);
	
	$subject = $subject . $name;
	
	$headers = 'From: ' . $email . "\r\n" .
	'Reply-To: ' . $email_from . "\r\n" .
	'X-Mailer: PHP/' . phpversion();
	
	@mail($emailTo, $subject, $message, $headers);
	
	header("Location: http://www.xn--venue-fsa.com/_site/index.html?message=success#contact");
}
else
{
	header("Location: http://www.xn--venue-fsa.com/_site/index.html?message=failed#contact");
}
?>