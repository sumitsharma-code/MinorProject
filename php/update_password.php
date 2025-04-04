<?php
include '../connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $token = $_POST['token'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $check = $conn->query("SELECT * FROM users WHERE reset_token = '$token' AND token_expiry > NOW()");
    if ($check->num_rows == 0) {
        die("Invalid or expired token.");
    }

    $conn->query("UPDATE users SET password = '$password', reset_token = NULL, token_expiry = NULL WHERE reset_token = '$token'");
    echo "Password updated successfully. <a href='/MinorProject/login.php'>Login</a>";
}
?>
