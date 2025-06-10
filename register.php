<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "loginhousie";

// Connect to database
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$phone = $_POST['phone'];
$password = $username . substr($phone, -5);

// Check if username already exists
$check = $conn->prepare("SELECT id FROM users WHERE username = ?");
$check->bind_param("s", $username);
$check->execute();
$check->store_result();

if ($check->num_rows > 0) {
  echo "Username already exists. Please choose another.";
  $check->close();
  $conn->close();
  exit();
}

$check->close();

// Insert new user
$stmt = $conn->prepare("INSERT INTO users (username, phone, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $phone, $password);

if ($stmt->execute()) {
  echo "Registration successful! You can now log in.";
} else {
  echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
