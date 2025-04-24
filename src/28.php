<?php
// This PHP script serves as an example to demonstrate basic programming concepts.
// Note that this script cannot handle complex database operations or file reading/write operations,
// and it is meant for educational purposes only.

// Define some variables
$studentName = "John Doe";
$password = "password123";

// Check if the student's name exists in the system
if (file_exists("students.txt")) {
    $filename = "students.txt";
} else {
    file_put_contents($filename, "<NAME>");
}

// Write the student's name to the 'students.txt' file
file_put_contents("$filename", "$studentName");

// Check if the password is correct
if ($password == "password123") {
    echo "Password verification successful!";
} else {
    echo "Incorrect password.";
}
?>
