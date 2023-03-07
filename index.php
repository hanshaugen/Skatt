<?php

//echo "Hello World!";
$im = imagecreatefrompng('tresure.png');
  
// View the loaded image in browser using imagepng() function
header('Content-type: image/png');  
imagepng($im);
imagedestroy($im);
