<?php
$host = "localhost";
$user = "root";
$pass = "newpassword";  // Change if needed
$db = "loginhousie";
$port=3307;

$conn = new mysqli($host, $username, $password, $database, $port);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
