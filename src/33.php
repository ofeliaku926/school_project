<?php
// This PHP code snippet demonstrates basic array operations and variable assignment.
$numbers = [1, 2, 3];
echo "Numbers: " . implode(', ', $numbers) . "\n"; // Output: Numbers: 1, 2, 3

$a = 5;
$b = 10;

// Assigning values to variables
$sum = $a + $b; // $sum becomes 15
$product = $a * $b; // $product becomes 50

// Output the results
echo "Sum: $sum\n";
echo "Product: $product\n";

// Adding the two arrays element-wise
$even_numbers = array_filter($numbers, function($num) {
    return $num % 2 == 0;
});

if (!empty($even_numbers)) {
    echo "Even numbers in the array: " . implode(', ', $even_numbers);
} else {
    echo "No even numbers found.\n";
}
?>
