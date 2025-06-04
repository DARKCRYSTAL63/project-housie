<?php
include 'db.php';

$username = $_POST['username'];
$phone = $_POST['phone'];
$password = $username . substr($phone, -5);
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, phone, password) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $username, $phone, $hashed_password);

if ($stmt->execute()) {
  echo "Registration successful. <a href='index.html'>Go back</a>";
} else {
  echo "Error: " . $conn->error;
}
?>
