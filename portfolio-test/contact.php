<?php
if(!empty($_POST["submit"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];

	$toEmail = "yijie2333@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $message, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	}
}
require_once "contact.php";
?>