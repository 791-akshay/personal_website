<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['user-name'];
    $email = $_POST['mail'];
    $subject = $_POST['about'];
    $message = $_POST['message'];

    // Change these values to your email address and desired subject
    $to = "akshay.bodhare84@example.com";
    $subject = "New Contact Form Submission";

    $email_body = "Name: $name\nEmail: $email\nSubject: $subject\nMessage:\n$message";

    // Send email
    mail($to, $subject, $email_body);

    // Redirect to a thank you page after successful submission
    header("Location: thank-you.html");
    exit;
}
?>