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

// Total Sales
$result = $conn->query("SELECT COUNT(*) as total_sales FROM orders");
$response['sales'] = $result->fetch_assoc()['total_sales'] ?? 0;

// Revenue (use IFNULL)
$result = $conn->query("SELECT SUM(IFNULL(selling_price, 0) * IFNULL(quantity, 0)) AS revenue FROM orders");
$response['revenue'] = $result->fetch_assoc()['revenue'] ?? 0;

// Profit (use IFNULL to prevent NULLs)
$result = $conn->query("SELECT SUM((IFNULL(selling_price, 0) - IFNULL(order_value, 0)) * IFNULL(quantity, 0)) AS profit FROM orders");
$response['profit'] = $result->fetch_assoc()['profit'] ?? 0;

// Cost
$result = $conn->query("SELECT SUM(order_value * quantity) as cost FROM orders");
$response['cost'] = $result->fetch_assoc()['cost'] ?? 0;

// Quantity in hand
$result = $conn->query("SELECT SUM(quantity) as quantity_in_hand FROM orders");
$response['quantity_in_hand'] = $result->fetch_assoc()['quantity_in_hand'] ?? 0;

// To be received (Pending orders)
if ($conn->query("SHOW COLUMNS FROM orders LIKE 'status'")->num_rows > 0) {
    $result = $conn->query("SELECT SUM(quantity) as to_be_received FROM orders WHERE status = 'Pending'");
    $response['to_be_received'] = $result->fetch_assoc()['to_be_received'] ?? 0;
} else {
    $response['to_be_received'] = 0;  // default if status column doesn't exist
}

// Purchase amount
$result = $conn->query("SELECT SUM(order_value * quantity) as purchase_amount FROM orders");
$response['purchase_amount'] = $result->fetch_assoc()['purchase_amount'] ?? 0;

// Suppliers count
$result = $conn->query("SELECT COUNT(*) as total_suppliers FROM suppliers");
$response['suppliers'] = $result->fetch_assoc()['total_suppliers'] ?? 0;

// Categories – temporarily hardcoded if no 'category' table exists
$response['categories'] = 3;

$conn->close();
echo json_encode($response);
?>
