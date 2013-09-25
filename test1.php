<?php

// Продукция со стоимостью
$nabor = array("A" => 10, "B" => 20, "C" => 25, "D" => 24, "E" => 18, "F" => 15,
    "G" => 10, "H" => 5, "I" => 8, "J" => 12, "K" => 10, "L" => 1,
    "M" => 30);
//print_r($nabor);

$zakupka = array(A, B, C, A, F, F, G, G, G);

function myRaschetSkidok($spisok) {
    global $nabor;
    $discountGlobal = 1;
    $rez = array_count_values($spisok);

    if (isset($rez["A"]) and isset($rez["B"])) {
// Если одновременно выбраны А и B, то их суммарная стоимость уменьшается 
// на 10% (для каждой пары А и B)

        $colAB = min(array($rez["A"], $rez["B"]));
        echo "Количество пар А и B = $colAB <br>";
        $costAB = (($nabor["A"] + $nabor["B"]) * $colAB * 0.1);
        echo "Скидка на $colAB пары А и В " . $costAB . "<br>";
        $discount = $costAB;
    }
    elseif (isset($rez["D"]) and isset($rez["E"])) {

//  Если одновременно выбраны D и E, то их суммарная стоимость уменьшается 
//  на 5% (для каждой пары D и E)    

        $colDE = min(array($rez["D"], $rez["E"]));
        echo "Количество пар D и E = $colDE <br>";
        $costDE = (($nabor["D"] + $nabor["E"]) * $colDE * 0.05);
        echo "Скидка на $colDE пары D и E " . $costDE . "<br>";
        $discount = $costDE;
    }
    elseif (isset($rez["E"]) and isset($rez["F"]) and isset($rez["G"])) {

//  Если одновременно выбраны E,F,G, то их суммарная стоимость уменьшается 
//  на 5% (для каждой тройки E,F,G)    

        $colEFG = min(array($rez["E"], $rez["F"], $rez["G"]));
        $costEFG = (($nabor["E"] + $nabor["F"] + $nabor["G"]) * $colEFG * 0.05);
        echo "Количество троек EFG = " . $colEFG . "<br>";
        echo "Скидка на $colEFG E F G " . $costEFG . "<br>";
        $discount = $costEFG;
    }
    elseif ((isset($rez["A"]) and isset($rez["K"])) or
        (isset($rez["A"]) and isset($rez["L"])) or
        (isset($rez["A"]) and isset($rez["M"]))) {

//  Если одновременно выбраны А и один из [K,L,M], то стоимость выбранного 
//  продукта уменьшается на 5%    

        if ($rez["A"] >= 1 and $rez["K"] >= 1) {
            echo "Скидка на K = " . $discount = ($nabor["K"] * 0.05) . "<br>";
        }

        if ($rez["A"] >= 1 and $rez["L"] >= 1) {
            echo "Скидка на L = " . $discount = ($nabor["L"] * 0.05) . "<br>";
        }

        if ($rez["A"] >= 1 and $rez["M"] >= 1) {
            echo "Скидка на M = " . $discount = ($nabor["M"] * 0.05) . "<br>";
        }
    }
    elseif (count($rez) >= 3) {

//  Если пользователь выбрал одновременно 3 продукта, он получает 
//  скидку 5% от суммы заказа
//  Если пользователь выбрал одновременно 4 продукта, он получает 
//  скидку 10% от суммы заказа
//  Если пользователь выбрал одновременно 5 продуктов, он получает 
//  скидку 20% от суммы заказа
//  Описанные скидки 5,6,7 не суммируются, применяется только одна из них
//  Продукты A и C не участвуют в скидках 5,6,7

        foreach ($rez as $key => $value) {
            if ($key != "A" and $key != "C") {
                echo "Товар " . $key . " цена за единицу " . $nabor[$key] . 
                    "  Всего $value шт." . "<br>";
                $mytmp[$key] = $value;
            }
        }

        $maxcost = max($mytmp);

        echo "Максимальное количество товара не A  и не B = " . $maxcost . "<br>";

        if ($maxcost == 3) {
            echo "Cкидка на весь заказ 5%<br>";
            $discountGlobal = 0.95;
        }
        elseif (count($rez) == 4) {
            echo "Cкидка на весь заказ 10%<br>";
            $discountGlobal = 0.9;
        }
        elseif (count($rez) >= 5) {
            echo "Cкидка на весь заказ 20%<br>";
            $discountGlobal = 0.8;
        }
    }

//  Считаем стоимость всего товара за вычетом скидки
    echo "=================================<br>";
    $all = 0;
    //print_r($rez);
    foreach ($rez as $key => $value) {
        echo "Товар " . $key . " цена за единицу " . $nabor[$key] . "  Всего $value шт." . "<br>";
        $all = $all + $nabor[$key] * $value;
    }
    echo "=================================<br>";
    echo "<b>Всего за товар: " . $all . "</b><br>";
    echo "<b>Скидка по акционным товарам: $discount </b><br>";
    echo "<b>Скидка при покупке 3 и более товаров: " . ($all - ($all * $discountGlobal)) . "</b><br>";
    echo "<b>Итого: " . (($all - $discount) * $discountGlobal) . "</b><br>";
}
myRaschetSkidok($zakupka);
?>
