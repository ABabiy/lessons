<?php

$array1 = array(15, 15, 17, 16);
$array2 = array(20, 15, 17);
$array = array_merge($array1, $array2);
print_r($array);
echo "<br>";
$array = array_unique($array);
sort($array);
print_r($array);
?>
