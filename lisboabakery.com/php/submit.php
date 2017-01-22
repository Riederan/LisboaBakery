<?php
	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$people = $_POST["people"];
	$location = $_POST["location"];
	$date = $_POST["date"];
	$time = $_POST["time"];
	$description = $_POST["description"];
	$from = $name; // sender
    $subject = "Event Booking";
    $message = "Full name: " . $name . "\r\n Email: " . $email . "\r\n Phone number: " . $phone . "\r\n Number of people: " . $people . "\r\n Location: " . $location . "\r\n Date: " . $date . "\r\n Time: " . $time . "\r\n Order description: " . $description;
    // message lines should not exceed 70 characters (PHP rule), so wrap it
	$message = wordwrap($message, 70);
    // send mail
    mail('lisboabakery@hotmail.com',$subject,$message);
    header("Location: ../thanks.php");
?>