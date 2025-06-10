<?php
// Start output buffering to prevent "headers already sent" errors
ob_start();

$host = "localhost";
$user = "root";
$pass = "newpassword"; // your MySQL root password
$db = "loginhousie";
$port = 3307;

// Connect to database
$conn = new mysqli($host, $user, $pass, $db, $port);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get POST data
$username = $_POST['username'];
$phone = $_POST['phone'];
$password = $username . substr($phone, -5);

// Check if username already exists
$check = $conn->prepare("SELECT id FROM users WHERE username = ?");
$check->bind_param("s", $username);
$check->execute();
$check->store_result();

if ($check->num_rows > 0) {
  echo "❌ Username already exists. Please choose another.";
  $check->close();
  $conn->close();
  ob_end_flush();
  exit();
}
$check->close();

// Insert new user
$stmt = $conn->prepare("INSERT INTO users (username, phone, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $phone, $password);

if ($stmt->execute()) {
  // Redirect to login page after success
  header("Location: login.php");
  ob_end_flush();
  exit();
} else {
  echo "❌ Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
ob_end_flush();
?>
