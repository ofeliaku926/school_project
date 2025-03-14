<?php
function getRandomColor() {
    $colors = array('red', 'green', 'blue');
    return $colors[array_rand($colors)];
}

$color = getRandomColor();
echo "The color is: {$color}\n";
?>