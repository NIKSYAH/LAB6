<?php
header("Content-Type: image/png");

// Path to your TTF font file
$fontFile = __DIR__ . "/FONT.ttf";

// Check if the font file exists
if (!file_exists($fontFile)) {
    die("Font file not found.");
}

// Create an image canvas
$image = imagecreate(500, 200);

// Define colors
$lightGray = imagecolorallocate($image, 211, 211, 211);
$black = imagecolorallocate($image, 0, 0, 0);

// Fill the background with light gray
imagefilledrectangle($image, 0, 0, 500, 200, $lightGray);

// Add personalized greeting text
imagettftext($image, 20, 0, 50, 100, $black, $fontFile, "Hello, User!");

// Output the image
imagepng($image);

// Free up memory
imagedestroy($image);
?>