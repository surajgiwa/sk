<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Email details
$to = 'giwas@uwindsor.ca';  // Replace with the recipient's email address
$subject = 'Contact Form Submission';
$body = "Name: $name\nEmail: $email\nMessage: $message";

// Send email
if (mail($to, $subject, $body)) {
    echo 'Email sent successfully!';
} else {
    echo 'Error occurred. Please try again later.';
}
?>
