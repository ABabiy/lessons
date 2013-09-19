<?php

function add($x, $y) {
    return ($x + $y);
}
function sub($x, $y) {
    return ($x - $y);
}
function mult($x, $y) {
    return ($x * $y);
}
function mean($x, $y) {
    return ($x + $y) / 2;
}
function div($x, $y) {
    if ($y == 0) {
        return FALSE;
    }
    return ($x / $y);
}
function factorial($x) {
    if ($x < 0)
        return FALSE;
    if ($x == 0)
        return 1;
    $f = 1;
    for ($i = 1; $i <= $x; $i++) {
        $f *= $i;
    }
    return $f;
}
function mySortArray($myarray, $sort) {
    if ($sort == TRUE) {
        sort($myarray);
        echo "<center>";
        for ($i = 0; $i < count($myarray); $i++) {
            echo "<br>Элемент $i = " . $myarray[$i];
        }
        foreach ($myarray as $value) {
            echo "<br>Элемент $value = " . $myarray[$value];
        }
        
        echo "</center>";
    }
    elseif ($sort == FALSE) {
        rsort($myarray);
        for ($i = 0; $i < count($myarray); $i++) {
            echo "<br>Элемент $i = " . $myarray[$i];
        }
    }
}

?>