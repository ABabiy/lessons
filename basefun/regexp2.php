<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $reg = "/^([a-z]{0,})\.([a-z]{1,})@([a-z]{0,})\.([a-z]{0,})\.com$/";
            $text = $_POST["email"];
            echo preg_match($reg, $text);
        ?>
        <form name="myForm" action="regexp2.php" method="post">
            <p>
                <input type="text" name="email" value = "<?=$text?>">
                <input type="submit" name="post" value="Отправить">
            </p>
        </form>
    </body>
</html>
