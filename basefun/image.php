<?php
    $im = imageCreateFromJpeg("agent.jpg");
    $color = imagecolorat($im, $_POST["x"], $_POST["y"]); //$_POST["x"], $_POST["y"])
    //echo $color;
    $color1 = imagecolorsforindex($im, $color);
    print_r($color1);
    echo "<br>";
    echo "Цвет точки (" . $color1[red] . "," . $color1[green] . "," . $color1[blue] . ")<br>";
    echo "red $color1[red] <br>";
    echo "red $color1[green] <br>";
    echo "red $color1[blue] <br>";
//    header("Content-type: image/jpeg");
//    imagejpeg($im);
    imagedestroy($im);
?>
