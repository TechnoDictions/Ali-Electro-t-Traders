<?php
$to = "your-email@example.com";  // Replace with your email address
$subject = "Test Email";
$message = "This is a test email to check the PHP mail function.";
$headers = "From: noreply@example.com";  // Replace with a valid email address

if (mail($to, $subject, $message, $headers)) {
    echo "Test email sent successfully!";
} else {
    echo "Failed to send test email.";
}
?>
