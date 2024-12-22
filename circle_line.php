<?php
header("Content-Type: image/png");

// Create an image canvas
$image = imagecreate(400, 400);

// Define colors
$white = imagecolorallocate($image, 255, 255, 255);
$green = imagecolorallocate($image, 0, 255, 0);
$purple = imagecolorallocate($image, 128, 0, 128);

// Fill the background with white
imagefilledrectangle($image, 0, 0, 400, 400, $white);

// Draw a green circle
imagefilledellipse($image, 200, 200, 150, 150, $green);

// Draw a purple line
imageline($image, 50, 50, 350, 350, $purple);

// Output the image
imagepng($image);

// Free up memory
imagedestroy($image);
?>