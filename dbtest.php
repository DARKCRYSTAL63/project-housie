<?php
$conn = new mysqli("localhost", "root", "newpassword", "loginhousie", 3307);

if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}
echo "✅ Connection successful!";
$conn->close();
?>
