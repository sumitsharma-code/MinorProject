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

$query = "
    SELECT 
        MONTHNAME(created_at) AS month,
        SUM(selling_price * quantity) AS sales,
        SUM(order_value * quantity) AS purchase
    FROM orders
    GROUP BY MONTH(created_at)
";

$result = $conn->query($query);

$data = [];

while ($row = $result->fetch_assoc()) {
    $data[] = [
        "month" => $row["month"],
        "sales" => (float)$row["sales"],
        "purchase" => (float)$row["purchase"]
    ];
}

$conn->close();

echo json_encode($data);
