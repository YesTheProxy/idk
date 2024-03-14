<?php
// Get the form data from the AJAX request
$name = $_POST['name'];
$email = $_POST['email'];

// Set up the email parameters
$to = 'thealt@skiff.com'; // Replace with your email address
$subject = 'New Newsletter Subscription';
$message = "Name: $name\nEmail: $email";
$headers = "From: $email";

// Send the email
if (mail($to, $subject, $message, $headers)) {
  echo 'Email sent successfully!';
} else {
  echo 'Failed to send email.';
}
?>
