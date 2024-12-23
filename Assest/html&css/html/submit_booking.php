<?php

$name = $_POST['name'];
$age = $_POST['age'];
$aadhaar = $_POST['aadhaar'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$date = $_POST['date'];
$destination = $_POST['destination'];

$to = "yahoo_kolkata@example.com";
$subject = "Booking for $destination on $date";
$message = "Name: $name\nAge: $age\nAadhaar Number: $aadhaar\nPhone Number: $phone\nEmail: $email";
$headers = "From: $email";

mail($to, $subject, $message, $headers);

echo "Booking successful! We will contact you soon.";
