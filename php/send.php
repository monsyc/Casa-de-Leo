<?php

	$name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];

  $checkInMonth = $_POST['checkInMonth'];
  $checkInDay = $_POST['checkInDay'];
  $checkOutMonth = $_POST['checkOutMonth'];
  $checkOutDay = $_POST['checkOutDay'];

  $guestNumber = $_POST['guestNumber'];
  $roomNumber = $_POST['roomNumber'];

  $text = $_POST['text'];

  $to = "silva.castro.mony@gmail.com";
  $subject = 'Message from Casa de Leo website';

  $message =    "From: $name \n E-Mail: $email \n Phone: $phone \n Check In \n Month: $checkInMonth \n Day: $checkInDay \n Check Out \n Month: $checkOutMonth \n Day: $checkOutDay \n Message: \n $text";
  
  $message = str_replace("\n.", "\n..", $message);
  
  $headers = 'From: silva.castro.mony@gmail.com' . "\r\n" .
    'Reply-To: silva.castro.mony@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

  $success = mail($to, $subject, $message, $headers);
  if(!$success) {   
    echo "Error";   
  } else {
    echo file_get_contents("../success.html");
  }
  
	header('Location: ../index.html');

?>
