<?php
$name = $_POST['contact-form-name'];
$email = $_POST['contact-form-email'];
$phone = $_POST['contact-form-phone'];
$address = $_POST['contact-form-address'];

$to = 'mikemovingrelocation@gmail.com, mymovers@aol.com';
$subject = 'You have a lead!';

$body = "";
$body .= "Name: ";
$body .= $name;
$body .= "\n\n";

$body .= "Email: ";
$body .= $email;
$body .= "\n\n";

$body .= "Phone: ";
$body .= $phone;
$body .= "\n\n";

$body .= "Address: ";
$body .= $address;
$body .= "\n\n";

$headers = 'From: ' . $email . "\r\n";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    mail($to, $subject, $body, $headers);
    echo '<span id="valid">We received your details! We will contact you as soon as possible!</span>';
} else {
    echo '<span id="invalid">Something went wrong. Please try again.</span>';
}
