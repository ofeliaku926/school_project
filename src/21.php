<?php
// Create a new PDO instance
$pdo = new PDO('mysql:host=localhost;dbname=testdb', 'root', '');

// Execute a query to fetch data from the "students" table
$result = $pdo->query("SELECT * FROM students");

// Print the results of the query
echo "<pre>";
print_r($result);
?>
