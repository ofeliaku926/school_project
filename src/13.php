<?php
$student = [
  "name" => "John Doe",
  "age" => 20,
  "courses" => ["Math", "English", "Science"]
];

foreach ($student as $key => $value) {
    echo "$key is $value\n";
}
?>
