<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $reg = "/[0-2][0-9]\.[01][0-9]\.[0-2][0-9][0-9][0-9]/";
            $text = $_POST["data"];
            echo preg_match($reg, $text);
        ?>
        <form name="myForm" action="regexp1.php" method="post">
            <p>
                <input type="text" name="data" value = "<?=$text?>">
                <input type="submit" name="post" value="Отправить">
            </p>
        </form>
    </body>
</html>
