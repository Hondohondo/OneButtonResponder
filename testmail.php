<?php
if (mail('mnandi19@jcu.edu', 'Test Mail', 'This is a test email to check if mail is working', 'From: test@example.com')) {
    echo 'Email sent successfully';
} else {
    echo 'Email sending failed';
}
?>
