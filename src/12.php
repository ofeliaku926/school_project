<?php
// Simple PHP calculator with addition and subtraction functions
function calculate($num1, $num2, $operation) {
    if ($operation === '+') {
        return $num1 + $num2;
    } elseif ($operation === '-') {
        return $num1 - $num2;
    } else {
        // Unsupported operation
        return null;
    }
}

// Test the calculate function with some examples
echo calculate(5, 3, '+') . "\n"; // Output: 8
echo calculate(10, 2, '-') . "\n"; // Output: 8
?>