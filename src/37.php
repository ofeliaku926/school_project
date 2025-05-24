<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM students WHERE id = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "Found data";
} else {
  echo "No data found";
}
$conn->close();
?>
