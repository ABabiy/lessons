<?php
$im = imagecreatetruecolor(800, 800);
$c = imagecolorallocate($im, 120, 120, 120);
imageline($im, 0, 400, imagesx($im), 400, $c);

for ($i = 0;$i < (3 * M_PI); $i++){
    $x = $i;
    $y = cos($x);
//    echo "x = $x <br>" . $x*80 . "<br>";
//    echo "cos(x) = $y <br>" . $y*50 . "<br>";
    imagesetpixel($im, ceil($x*80), ceil($y*200)+400, $c);
}


header("Content-type: image/png");
imagepng($im);
imagedestroy($im);
?>
