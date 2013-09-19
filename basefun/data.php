<?php
require_once '../lib/function.php';
for ($i = date("Y"); $i >= 1970; $i--) {
    $year[] = $i;
}

$month = array(1 => "Январь", 2 => "Февраль", 3 => "Март", 4 => "Апрель", 5 => "Май",
    6 => "Июнь", 7 => "Июль", 8 => "Август", 9 => "Сентябрь", 10 => "Октябрь",
    11 => "Ноябрь", 12 => "Декабрь");

for ($i = 31; $i >= 1; $i--) {
    $day[] = $i;
}
function myChDate($month, $day, $year) {
    if (checkdate($month, $day, $year) == false) {
        echo "сорри ошибка вышла с датой...";
    }
}
function monthToint($str){
    global $month;
    global $res;
    foreach ($month as $key => $value) {
        if ($value == $str) $res = $key;            
    }
    return "$res";
}

monthToint("Февраль");

myChDate($res, $_POST["day"], $_POST["year"]);
echo checkdate(2, 31, 2013);

?>
<table width ="300px" border ="1px" cellpadding ="0" cellspacing ="0" align ="center">
    <tr>
        <td align ="center">
            <form name="myform" action = "data.php" method ="post">
                <select name ="year">
                    <?php
                    foreach ($year as $value) {
                        if ($value == date("Y") and (!isset($_POST["year"]))) {
                            echo "<option selected value =" . $value . ">$value</option>";
                        }
                        elseif (isset($_POST["year"]) and $_POST["year"] == $value) {
                            echo "<option selected value =" . $value . ">$value</option>";
                        }
                        else {
                            echo "<option value =" . $value . ">$value</option>";
                        }
                    }
                    ?>
                </select>
                <select name = "month">
                    <?php
                    foreach ($month as $key => $value) {
                        if ($key == date("n") and (!isset($_POST["month"]))) {
                            echo "<option selected value =" . $value . ">$value</option>";
                        }
                        elseif (isset($_POST["month"]) and $_POST["month"] == $value){
                            echo "<option selected value =" . $value . ">$value</option>";
                        }
                        else {
                            echo "<option value =" . $value . ">$value</option>";    
                        }
                    }
                    ?>
                </select>
                <select name = "day">
                    <?php
                    foreach ($day as $value) {
                        if ($value == date("j") and (!isset($_POST["day"]))) {
                            echo "<option selected value =" . $value . ">$value</option>";
                        }
                        elseif ((isset($_POST["day"])) and ($_POST["day"]) == $value){
                            echo "<option selected value =" . $value . ">$value</option>";
                        }
                        else {
                            echo "<option value =" . $value . ">$value</option>";                            
                        }
                    }
                    ?>
                </select>
                <br><br>
                <input type = "submit" name = "send" value = "Отправить данные">
            </form>
        </td>
    </tr>
</table>
