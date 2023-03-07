<?php

//echo "Hello World!";
$im = imagecreatefrompng(
'https://github.com/hanshaugen/Skatt/blob/master/tresure.png');
  
// View the loaded image in browser using imagepng() function
header('Content-type: image/png');  
imagepng($im);
imagedestroy($im);
