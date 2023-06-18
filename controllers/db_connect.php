<?php
$servername = "YOUR_SERVER";
$username = "YOUR_SERVER_USERNAME_ACCESS";
$password = "YOUR_SERVER_PASSWORD_ACCESS";
$dbname = "YOUR_DATABASE_NAME";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>