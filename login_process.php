<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "newpassword";
$db = "loginhousie";
$port=3307;

// Connect
$conn = new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
  $_SESSION['username'] = $username;
  header("Location: index.php");
  exit();
} else {
  echo "Invalid login. Please try again.";
}

$stmt->close();
$conn->close();
?>
