<?php
if (is_dir($_POST["login"]) == TRUE) {
    echo "Такая директория существует!";
}
else {
    echo "Такая директория НЕ существует!";
    echo "Создаём!";
    $mkdir = iconv("utf-8", "windows-1251", $_POST["login"]);
    mkdir($mkdir);
}
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form name="myForm" action="dir.php" method="post">
            <p>
                <input type="text" name="login" value="Логин">
                <input type="text" name="password" value="Пароль">
                <input type="submit" name="post" value="Отправить">
            </p>
        </form>
    </body>
</html>        