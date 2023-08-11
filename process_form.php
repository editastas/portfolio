<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $name = $_POST['contact-name'];
    $phone = $_POST['contact-phone'];
    $email = $_POST['contact-email'];
    $message = $_POST['contact-message'];

    // Send an email with the form data
    $to = 'staskunaite.edita@gmail.com';
    $subject = 'New Contact Form Submission';
    $body = "Name: $name\nPhone: $phone\nEmail: $email\nMessage: $message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        // Email sent successfully
        header('Location: thank-you.html'); 
        exit();
    } else {
        // Error sending email
        echo 'An error occurred while processing your form. Please try again later.';
    }
} else {
    // Invalid request method
    echo 'Invalid request method.';
}
?>
