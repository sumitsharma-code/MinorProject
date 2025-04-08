<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "inventorydb";

$conn = new mysqli($host, $user, $pass, $db, 4306);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['supplier_name'];
    $product = $_POST['product'];
    $contact = $_POST['contact_number'];
    $email = $_POST['email'];
    $type = $_POST['type'];

    // Prepare and bind to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO suppliers (supplier_name, product, contact_number, email, type) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $product, $contact, $email, $type);

    if ($stmt->execute()) {
        header("Location: /MinorProject/pages/Suppliers.html?success=1");
        exit();
    } else {
        echo "❌ Error inserting data: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>
