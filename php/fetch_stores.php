<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "inventorydb";

$conn = new mysqli($host, $user, $pass, $db, 4306);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM stores";
$result = $conn->query($sql);

$stores = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $stores[] = $row;
    }
}

echo json_encode($stores);

$conn->close();
?>
