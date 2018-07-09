<?php
$file = 'fb.png';
$size = 0.45; 
header('Content-type: image/png');
list($width, $height) = getimagesize($file);
$modwidth= $width * $size;
$modheight= $height * $size;
$tn= imagecreatetruecolor($modwidth, $modheight);
$source = imagecreatefrompng($file);
imagecopyresized($tn, $source, 0, 0, 0, 0, $modwidth, $modheight, $width, $height);
imagepng($tn); ?>

