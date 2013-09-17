<?php
if (isset($_POST["post"])){
    if (!is_numeric($_POST["n1"])) {
        echo "Введённое выражение <b>" . $_POST["n1"] . "</b> не является числом! <br>";
    }
    else {
        $n1 = $_POST["n1"];
    }
    if (!is_numeric($_POST["n2"])) {
        echo "Введённое выражение <b>" . $_POST["n2"] . "</b> не является числом! <br>";
    }
    else {
        $n2 = $_POST["n2"];
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form name="myForm" action="index.php" method="post">
            <p>
                <input type="text" name="n1" value="<?php echo $_POST["n1"] ?>">
                <input type="text" name="n2" value="<?php echo $_POST["n2"] ?>">
                <input type="submit" name="post" value="Отправить">
            </p>
        </form>
        <?php
        if (isset($n1) and isset($n2)) {
            echo "Сумма $n1 и $n2 = " . ($n1 + $n2);
        }
        else {
            echo" Сумма не может быть посчитана!";
        }
        ?>
    </body>
</html>
