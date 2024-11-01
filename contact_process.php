<?php

// Set the recipient email address.
$to = "keanarellano53@gmail.com";

// Retrieve and sanitize the user's email input.
$from = filter_var($_REQUEST['email'], FILTER_SANITIZE_EMAIL);

// Set the email headers.
$headers = "From: " . $from . "\r\n";
$headers .= "Reply-To: " . $from . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

// Email subject.
$email_subject = "Contact Request";

// Basic email content.
$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Contact Request</title></head><body>";
$body .= "<p>You have received a contact request from: {$from}</p>";
$body .= "</body></html>";

// Send the email.
$send = mail($to, $email_subject, $body, $headers);

// Check if the email was sent successfully.
if ($send) {
    echo "Message sent successfully!";
} else {
    echo "There was an error sending your message. Please try again.";
}

?>
