<?php
// Set the content type to image (PNG)
header("Content-Type: image/png");

// Create an image canvas with a width of 400px and a height of 100px
$width = 400;
$height = 100;
$image = imagecreate($width, $height);

// Define colors for the background and tex
$background_color = imagecolorallocate($image, 0, 0, 255); // Blue color (for background if needed)
$text_color = imagecolorallocate($image, 255, 255, 255);   // White color (for text)

// Fill the background with the blue color
imagefill($image, 0, 0, $background_color);

// Add the welcome text to the image
$text = "Welcome to Our Shop!";
$font_size = 5; 
$x = $width =50; // Center horizontally
$y = $height =40;               // Center vertically
imagestring($image, $font_size, $x, $y, $text, $text_color);

// Output the image in PNG format
imagepng($image);

// Free memory
imagedestroy($image);
?>