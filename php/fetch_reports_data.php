<?php
header('Content-Type: application/json');
$host = "localhost";
$user = "root";
$pass = "";
$db = "inventorydb";
$conn = new mysqli($host, $user, $pass, $db, 4306);

if ($conn->connect_error) {
    echo json_encode(["error" => "DB Connection Failed"]);
    exit();
}


$response = [];


// Total Profit
$q = $conn->query("SELECT SUM((selling_price - order_value) * quantity) as profit FROM orders");
$response['profit'] = $q->fetch_assoc()['profit'] ?? 0;

// Revenue
$q = $conn->query("SELECT SUM(selling_price * quantity) as revenue FROM orders");
$response['revenue'] = $q->fetch_assoc()['revenue'] ?? 0;

// Total Orders
$q = $conn->query("SELECT COUNT(*) as sales FROM orders");
$response['sales'] = $q->fetch_assoc()['sales'] ?? 0;

// Net Purchase Value
$q = $conn->query("SELECT SUM(order_value * quantity) as purchase FROM orders");
$response['purchase'] = $q->fetch_assoc()['purchase'] ?? 0;


$q = $conn->query("SELECT SUM((selling_price - order_value) * quantity) as mom_profit FROM orders WHERE created_at >= DATE_SUB(CURDATE(), INTERVAL 1 MONTH)");
$response['mom_profit'] = $q->fetch_assoc()['mom_profit'] ?? 0;

$q = $conn->query("SELECT SUM((selling_price - order_value) * quantity) as yoy_profit FROM orders WHERE YEAR(created_at) = YEAR(CURDATE())");
$response['yoy_profit'] = $q->fetch_assoc()['yoy_profit'] ?? 0;

// Top Categories by Turnover
$q = $conn->query("SELECT category, SUM(selling_price * quantity) as turnover FROM orders GROUP BY category ORDER BY turnover DESC LIMIT 3");
$response['top_categories'] = [];
while ($row = $q->fetch_assoc()) {
    $response['top_categories'][] = $row;
}

// Top Products
$q = $conn->query("SELECT product_name, product_id, category, SUM(quantity) as total_qty, SUM(selling_price * quantity) as turnover FROM orders GROUP BY product_id ORDER BY total_qty DESC LIMIT 5");
$response['top_products'] = [];
while ($row = $q->fetch_assoc()) {
    $response['top_products'][] = $row;
}

echo json_encode($response);
$conn->close();
