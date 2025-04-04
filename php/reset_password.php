<?php
include '../connection.php';

if (!isset($_GET['token'])) {
    die("Invalid request.");
}

$token = $_GET['token'];
$result = $conn->query("SELECT * FROM users WHERE reset_token = '$token' AND token_expiry > NOW()");

if ($result->num_rows == 0) {
    die("Token is invalid or expired.");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Reset Password</title>
    <link rel="stylesheet" href="/MinorProject/CSS/output.css" />
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">
    <form action="update_password.php" method="POST" class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-xl font-semibold mb-4">Reset Your Password</h2>
        <input type="hidden" name="token" value="<?= htmlspecialchars($token) ?>" />
        <div class="mb-4">
            <label class="block text-gray-700">New Password</label>
            <input type="password" name="password" class="w-full px-3 py-2 border rounded" required />
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Change Password</button>
    </form>
</body>

</html>