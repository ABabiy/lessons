<?php
$variant1 = array("Пожалуйста", "Просто");
$variant2 = array("удивительное", "крутое", "простое");
$variant3 = array("быстро", "мгновенно");
$var3_rnd = $variant3[rand(0, 1)];
$variant4 = array("изменялось <b>$var3_rnd</b> случайным образом", "менялось каждый раз");

$str = $variant1[rand(0, 1)] . " сделайте так, чтобы это " . $variant2[rand(0, 2)] 
    . " тестовое предложение " . $variant4[rand(0, 1)] . ".";

echo $str; 
?>
