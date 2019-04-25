<?php

// Build base image 200 x 200
$baseImage = imagecreatetruecolor(200, 200);

// Set colors
$pink = imagecolorallocate($baseImage, 255, 105, 180);
$white = imagecolorallocate($baseImage, 255, 255, 255);
$green = imagecolorallocate($baseImage, 132, 135, 28);

// Draw shapes
imagerectangle($baseImage, 50, 50, 150, 150, $pink);
imagerectangle($baseImage, 45, 60, 120, 100, $white);
imagerectangle($baseImage, 100, 120, 75, 160, $green);

// Set image headers
header('Content-Type: image/jpeg');

// Print & Destory image to release memory
imagejpeg($baseImage);
imagedestroy($baseImage);
?>

