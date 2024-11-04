
<?php
define('BASE_URL', 'http://localhost/online-learning-platform/');

$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "online_learning";

// Create connection
$db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>