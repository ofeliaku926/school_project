<?php
// Function to calculate the area of a rectangle
function calculateArea($length, $width) {
  return $length * $width;
}

// Function to calculate the perimeter of a rectangle
function calculatePerimeter($length, $width) {
  return 2 * ($length + $width);
}

// Example usage of the functions
$rectangle = array('length' => 5, 'width' => 3);
echo "Area: " . calculateArea($rectangle['length'], $rectangle['width']) . "<br>";
echo "Perimeter: " . calculatePerimeter($rectangle['length'], $rectangle['width']);
?>