<?php
header("Content-Type: image/png");

// Create an image canvas
$image = imagecreate(400, 100);

// Define colors
$yellow = imagecolorallocate($image, 255, 255, 0);
$black = imagecolorallocate($image, 0, 0, 0);

// Fill the background with yellow
imagefilledrectangle($image, 0, 0, 400, 100, $yellow);

// Add text displaying number of products sold
imagestring($image, 5, 100, 40, "100 Items Sold", $black);

// Output the image
imagepng($image);

// Free up memory
imagedestroy($image);
?>