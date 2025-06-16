<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $company = htmlspecialchars($_POST['company']);
    $email = htmlspecialchars($_POST['email']);
    $description = htmlspecialchars($_POST['description']);

    $to = "ahmadindustrial6692@gmail.com";  // Replace with your email address
    $subject = "New Form Submission";
    $message = "Name: $name\nCompany: $company\nEmail: $email\nDescription: $description";
    $headers = "From: noreply@https://ali-electro-traders.great-site.net/.com";  // Replace with a valid email address

    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
} else {
    echo "No POST data received.";
}
?>
