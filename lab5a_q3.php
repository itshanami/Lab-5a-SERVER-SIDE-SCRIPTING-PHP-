<?php
// Function to calculate the area of a rectangle
function calculateArea($width, $height) {
    // Return the area of the rectangle
    return $width * $height;
}

// Call the function with chosen values
$width = 4;
$height = 2;
$area = calculateArea($width, $height);

// Display the entire result in bold
echo "<strong>The area of rectangle with a width of $width and $height is $area</strong>";
?>
