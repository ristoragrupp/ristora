<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Set recipient email address
    $to = "nicola.berti@bluewin.ch"; // Replace with your actual email address

    // Set subject
    $subject = "New Contact Form Submission";

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Phone: $phone\n";
    $email_message .= "Message:\n$message";

    // Additional headers
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $email_message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Error sending email.";
    }
} else {
    echo "Invalid request.";
}
?>
