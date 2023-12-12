<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set recipient email address
    $to = "test@mypersonaltester.com";

    // Set email subject
    $subject = "New Contact Form Submission from $name";

    // Build the email message
    $message_body = "Name: $name\n";
    $message_body .= "Email: $email\n\n";
    $message_body .= "Message:\n$message";

    // Additional headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    $mail_success = mail($to, $subject, $message_body, $headers);
    // The function mail() needs to be initialized in the server. I need to investigate how that's done. 

    if ($mail_success) {
        echo "Thank you for your message. We will get back to you soon!";
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
} else {
    // Redirect if accessed directly
    header("Location: contact.html");
    exit();
}
?>
