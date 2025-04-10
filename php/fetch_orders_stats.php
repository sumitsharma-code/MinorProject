<?php
header('Content-Type: application/json');

$host = "localhost";
$user = "root";
$pass = "";
$db = "inventorydb";
$conn = new mysqli($host, $user, $pass, $db, 4306);

if ($conn->connect_error) {
    echo json_encode(["error" => "Connection failed"]);
    exit();
}

$response = [];

// Total Orders
$result = $conn->query("SELECT COUNT(*) as total_orders FROM orders");
$response['total_orders'] = $result->fetch_assoc()['total_orders'] ?? 0;

// Total Quantity
$result = $conn->query("SELECT SUM(quantity) as total_quantity FROM orders");
$response['total_quantity'] = $result->fetch_assoc()['total_quantity'] ?? 0;

// Total Investment
$result = $conn->query("SELECT SUM(order_value * quantity) as total_investment FROM orders");
$response['total_investment'] = $result->fetch_assoc()['total_investment'] ?? 0;

// Total Categories
$result = $conn->query("SELECT COUNT(DISTINCT category) as total_categories FROM orders");
$response['total_categories'] = $result->fetch_assoc()['total_categories'] ?? 0;

// Average Selling Price
$result = $conn->query("SELECT AVG(selling_price) as avg_sp, MAX(selling_price) as max_sp FROM orders");
$row = $result->fetch_assoc();
$response['avg_sp'] = round($row['avg_sp'] ?? 0, 2);
$response['max_sp'] = round($row['max_sp'] ?? 0, 2);

echo json_encode($response);
$conn->close();
?>
