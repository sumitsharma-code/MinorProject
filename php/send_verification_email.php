<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    echo "User not logged in.";
    exit();
}

$host = "localhost";
$user = "root";
$pass = "";
$db = "inventorydb";

// Connect to database
$conn = new mysqli($host, $user, $pass, $db, 4306);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$userId = $_SESSION['user_id'];

// Step 1: Fetch user's email from the `user` table
$stmt = $conn->prepare("SELECT email FROM user WHERE id = ?");
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo "User not found.";
    exit();
}

$row = $result->fetch_assoc();
$userEmail = $row['email'];

// Step 2: Generate token and expiry
$token = bin2hex(random_bytes(16));
$expiry = date('Y-m-d H:i:s', strtotime('+1 hour'));

// Step 3: Store token in database
$stmt = $conn->prepare("UPDATE user SET reset_token = ?, reset_token_expiry = ? WHERE id = ?");
$stmt->bind_param("ssi", $token, $expiry, $userId);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    $subject = "Password Reset Request";
    $resetLink = "http://localhost/MinorProject/php/reset_password.php?token=$token";
    $message = "Hi,\n\nClick the link below to reset your password:\n$resetLink\n\nThis link will expire in 1 hour.";
    $headers = "From: sumitsha711@gmail.com";

    if (mail($userEmail, $subject, $message, $headers)) {
        echo "✅ Verification email sent to <strong>$userEmail</strong>.";
    } else {
        echo "❌ Failed to send email.";
    }
} else {
    echo "❌ Could not update reset token in the database.";
}

$conn->close();
?>
