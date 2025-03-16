<?php
// Define a function to get a random number between 1 and 10
function getRandomNumber() {
    return mt_rand(1, 10);
}

// Use the function to get a random number and print it
echo getRandomNumber();
?>