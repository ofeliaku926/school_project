<?php
$students = [
    ['name' => 'Alice', 'age' => 15],
    ['name' => 'Bob', 'age' => 16]
];

foreach ($students as $student) {
    echo "Name: " . $student['name'] . ", Age: " . $student['age'] . "<br>";
}
