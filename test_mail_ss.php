<?php
// Set the recipient email address.
$to = 'mnandi19@jcu.edu'; // Replace with your email address

// Set the email subject.
$subject = 'Test Mail';

// Set the email message body.
$message = 'This is a test email to check if mail is working.';

// Set the email headers.
$headers = 'From: postmaster@darasareports.com' . "\r\n" .   // Replace with the sender's email address
           'Reply-To: postmaster@darasareports.com' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

// Use the mail() function.
if (mail($to, $subject, $message, $headers)) {
    echo 'Email sent successfully!';
} else {
    echo 'Failed to send email.';
}