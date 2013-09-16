<?
if(isset($_POST["calc"])){
//    print_r($_POST);
    require_once "lib/function.php";    
    $n_1 = $_POST["n_1"];
    $n_2 = $_POST["n_2"];
    $operation = $_POST["operation"];
    switch ($operation){
        case "add":
            $result = "$n_1 + $n_2 = " . add($n_1, $n_2);
            break;
        case "sub":
            $result = "$n_1 - $n_2 = " . sub($n_1, $n_2);
            break;
        case "mult":
            $result = "$n_1 * $n_2 = " . mult($n_1, $n_2);
            break;
        case "mean":
            $result = "($n_1 + $n_2)/2 = " . mean($n_1, $n_2);
            break;
        case "div": {
            $result = div($n_1, $n_2);
            if ($result === FALSE) $result = "Деление на 0!";
            else $result = "$n_1 / $n_2 = $result";
            break;
        }
        case "fact":{
            $result = factorial($n_1);
            if ($result === FALSE) $result = "Факториала не существует!";
            else $result = "Факториал $n_1 = $result";
            break;
        }
        default :
            $result = "Неизвестная операция";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Калькулятор</title>
    </head>
    <body>
        <?php
            if(isset($result)) echo "<p>Результат вычисления: $result</p>";
        ?>
        <form name= "myform" action ="index.php" method ="post">
            <p>
                <input type = "text" name ="n_1" value ="<?php echo $n_1?>">
                <select name="operation">
                        <?php 
                            $operations = array("add" => "+", 
                                                "sub" => "-",
                                                "mult" => "*", 
                                                "div" => "/", 
                                                "fact" => "!",
                                                "mean" => "mean");
                            foreach ($operations as $key => $value) {
                                if ($operation == "$key") {
                                    echo "<option value = '$key' selected>$value</option>";
                                }else
                                echo "<option value = '$key'>$value</option>";
                            }
                        ?>
                </select>
                <input type = "text" name ="n_2" value ="<?php echo $n_2?>">
                <br>
                <input type = "submit" name ="calc" value ="Вычислить">
            </p>
        </form>
    </body>
</html>
