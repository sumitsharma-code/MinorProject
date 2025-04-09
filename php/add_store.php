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
    $storeName = $_POST["store_name"];
    $branchName = $_POST["branch_name"];
    $streetAddress = $_POST["street_address"];
    $city = $_POST["city"];
    $phone = $_POST["phone_number"];
    $storeNumber = $_POST["store_number"];

    $stmt = $conn->prepare("INSERT INTO stores (store_name, branch_name, street_address, city, phone_number, store_number) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $storeName, $branchName, $streetAddress, $city, $phone, $storeNumber);

    if ($stmt->execute()) {
        header("Location: /MinorProject/pages/Store.html?success=1");
        exit();
    } else {
        echo "❌ Error: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>
