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

$result = $conn->query("SELECT * FROM orders");

$orders = [];

while ($row = $result->fetch_assoc()) {
    $orders[] = $row;
}

$conn->close();

echo json_encode($orders);
