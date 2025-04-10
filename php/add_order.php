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
    $product_name = $_POST['product_name'];
    $product_id = $_POST['product_id'];
    $order_value = $_POST['order_value'];
    $selling_value = $_POST['selling_value'];
    $quantity = $_POST['quantity'];
    $category = $_POST['category'];

    $stmt = $conn->prepare("INSERT INTO orders (product_name, product_id, order_value, selling_price, quantity, category) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssddis", $product_name, $product_id, $order_value, $selling_value, $quantity, $category);

    if ($stmt->execute()) {
        header("Location: /MinorProject/Pages/Orders.html?success=1");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>
