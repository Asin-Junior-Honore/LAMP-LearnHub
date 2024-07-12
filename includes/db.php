<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "learn_hub";


// $servername = "localhost";
// $username = "your_username";
// $password = "your_password";
// $dbname = "online_learning";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
}
