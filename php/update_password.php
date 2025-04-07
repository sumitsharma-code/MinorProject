<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "❌ Invalid request.";
    exit();
}

$host = "localhost";
$user = "root";
$pass = "";
$db = "inventorydb";

$conn = new mysqli($host, $user, $pass, $db, 4306);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$userId = $_POST['user_id'] ?? '';
$newPassword = $_POST['new_password'] ?? '';
$confirmPassword = $_POST['confirm_password'] ?? '';

// Validate input
if (empty($userId) || empty($newPassword) || empty($confirmPassword)) {
    echo "❌ All fields are required.";
    exit();
}

if ($newPassword !== $confirmPassword) {
    echo "❌ Passwords do not match.";
    exit();
}

// Hash the new password
$hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

// Update password and clear token
$stmt = $conn->prepare("UPDATE user SET password = ?, reset_token = NULL, reset_token_expiry = NULL WHERE id = ?");
$stmt->bind_param("si", $hashedPassword, $userId);

if ($stmt->execute()) {
    echo "✅ Password updated! Redirecting to login...";

    header("refresh:3;url=../pages/log.php");
} else {
    echo "❌ Failed to update password. Please try again.";
}

$conn->close();
