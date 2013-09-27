<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form name="myForm" action="redirect-calc.php" method="post">
            <p>
                <input type="text" name="n1" value="Число 1">
                <input type="text" name="n2" value="Число 2">
                <input type="submit" name="post" value="Отправить">
            </p>
        </form>
                <?=$_SESSION["result"]?>
    </body>
</html>
