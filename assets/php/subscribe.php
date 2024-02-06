<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$to = 'mikemovingrelocation@gmail.com, mymovers@aol.com'; // Updated email addresses
$subject = 'You Have a Lead!';

$body = "";
$body .= "Name: ";
$body .= $name;
$body .= "\n\n";

$body .= "Email: ";
$body .= $email;
$body .= "\n\n";

$body .= "Phone no.: ";
$body .= $phone;
$body .= "\n\n";

$body .= "Address: "; // Added Address field
$body .= $address;
$body .= "\n\n";

$headers = 'From: ' . $email . "\r\n";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    mail($to, $subject, $body, $headers);
    echo '<span id="valid">We received your details! We will contact you as soon as possible!</span>';
} else {
    echo '<span id="invalid">Something went wrong. Please try again.</span>';
}
