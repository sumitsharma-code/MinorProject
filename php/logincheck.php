<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "";
$db = "inventorydb";

// Connect to database
$conn = new mysqli($host, $user, $pass, $db, 4306);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle POST request from login form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Prepare SQL statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM user WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if a user with this email exists
    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();

        // Verify password
        if (password_verify($password, $row['password'])) {
            // ✅ Store user ID in session
            $_SESSION['user_id'] = $row['id'];

            // (Optional) Store more info if needed
            $_SESSION['username'] = $row['username']; // only if you want it

            // Redirect to dashboard/homepage
            header("Location: ../index.php");
            exit();
        } else {
            echo "❌ Incorrect password.";
        }
    } else {
        echo "❌ No user found with this email.";
    }

    $stmt->close();
    $conn->close();
}
