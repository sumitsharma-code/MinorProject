<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: /MinorProject/pages/log.php"); // Redirect to login page if not logged in
    exit();
}
?>