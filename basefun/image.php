<?php
    $im = imageCreateFromJpeg("123.jpg");
    header("Content-type: image/jpeg");
    imagejpeg($im);
    imagedestroy($im);
?>
