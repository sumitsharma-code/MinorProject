<?php
session_start();

// Database connection
$host = "localhost";
$user = "root";
$pass = "";
$db = "inventorydb";

$conn = new mysqli($host, $user, $pass, $db, 4306); // Use 3306 if 4306 doesn't work

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Get and validate input
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]); // Keep raw password — do NOT hash it again here!

    if (empty($email) || empty($password)) {
        die("Error: Please enter both email and password.");
    }

    // Fetch user by email
    $stmt = $conn->prepare("SELECT username, password FROM user WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // If user found
    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();

        // ✅ Correct password verification
        if (password_verify($password, $row["password"])) {
            $_SESSION["username"] = $row["username"];

            // Redirect to dashboard or home page
            header("Location: /MinorProject/index.php");
            exit();
        } else {
            echo "Error: Incorrect password!";
        }
    } else {
        echo "Error: Email not registered!";
    }

    $stmt->close();
}

$conn->close();
?>
