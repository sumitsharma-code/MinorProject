<?php
// Database connection
$host = "localhost";
$user = "root";
$pass = "";
$db = "inventorydb";

$conn = new mysqli($host, $user, $pass, $db, 4306);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Handling form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);  // Match column name
    $email = trim($_POST["email"]);
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);

    // Check if email already exists
    $check_email = $conn->prepare("SELECT email FROM user WHERE email = ?");
    $check_email->bind_param("s", $email);
    $check_email->execute();
    $result = $check_email->get_result();

    if ($result->num_rows > 0) {
        echo "Error: Email already registered!";
    } else {
        // Insert new user
        $stmt = $conn->prepare("INSERT INTO user (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $password);

        if ($stmt->execute()) {
            echo "Registration successful!";
            header("Location: /MinorProject/pages/log.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    }
    $check_email->close();
}

$conn->close();
