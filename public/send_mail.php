<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);
    
    // Email details
    $to = "arunganapathi20@gmail.com"; // Replace with your email address
    $subject = "Contact Form Submission from $name";
    $body = "
        <h2>Contact Request</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Message:</strong><br>$message</p>
    ";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    
    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully! Thank you";
    } else {
        echo "Failed to send email.";
    }
}
?>
