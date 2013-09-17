<?php
    $k = 10;
    echo "<center>";
    for ($i = 1; $i <= $k; $i++ ){
        echo $mas[$i] = mt_rand(10, 100);
        echo " Sin $mas[$i] = " . round(sin($mas[$i]), 2);
        echo "<br>";
        $mas[$i] = round(sin($mas[$i]), 2);
        echo "<font color=red> Значение [$i] элемента массива " . $mas[$i] . "</font>";
        echo "<br>";
    }
    foreach ($mas as $s){
        echo $s . "<br>";
    }
    echo "</center>";
?>
