<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "inventorydb";

$conn = new mysqli($host, $user, $pass, $db, 4306);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$token = $_GET['token'] ?? '';

if (empty($token)) {
    echo "❌ Invalid or missing token.";
    exit();
}

// Check token validity
$stmt = $conn->prepare("SELECT id, reset_token_expiry FROM user WHERE reset_token = ?");
$stmt->bind_param("s", $token);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows !== 1) {
    echo "❌ Invalid token.";
    exit();
}

$row = $result->fetch_assoc();
$userId = $row['id'];
$expiry = $row['reset_token_expiry'];

if (strtotime($expiry) < time()) {
    echo "❌ Token has expired.";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
    <style>
        body { font-family: Arial; padding: 40px; }
        form { max-width: 400px; margin: auto; }
        input[type="password"], input[type="submit"] {
            width: 100%; padding: 10px; margin: 10px 0;
        }
    </style>
</head>
<body>
    <h2>Reset Your Password</h2>
    <form method="POST" action="update_password.php">
        <input type="hidden" name="user_id" value="<?php echo htmlspecialchars($userId); ?>">
        <input type="password" name="new_password" placeholder="Enter new password" required>
        <input type="password" name="confirm_password" placeholder="Confirm new password" required>
        <input type="submit" value="Update Password">
    </form>
</body>
</html>
