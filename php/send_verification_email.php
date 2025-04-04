<?php
session_start();
include '../connection.php';

// Assuming the user is logged in and their email is stored in session
if (!isset($_SESSION['email'])) {
    die("User not logged in.");
}

$email = $_SESSION['email'];
$token = bin2hex(random_bytes(32)); // Generate a secure token

// Save token to DB
$sql = "UPDATE users SET reset_token = '$token', token_expiry = DATE_ADD(NOW(), INTERVAL 15 MINUTE) WHERE email = '$email'";
$conn->query($sql);

// Send email
$resetLink = "/MinorProject/php/reset_password.php?token=$token";

$subject = "Reset Your Password";
$message = "Click the link below to reset your password:\n\n$resetLink\n\nThis link is valid for 15 minutes.";
$headers = "From: no-reply@yourdomain.com";

if (mail($email, $subject, $message, $headers)) {
    echo "Verification email sent!";
} else {
    echo "Failed to send email.";
}
?>
