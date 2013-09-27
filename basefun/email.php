<?php 
    $message ="Добрый день!<br />Ваш логин ".$_POST[login]."<br /> и пароль ".$_POST["pass"];
    $to = $_POST["email"];
    $from = "alexn@alexn.kiev.ua";
    $subject = "Тема сообщения";
    $subject = "=?utf-8?B?".base64_encode($subject)."?=";
    $headers = "From: $from\r\nReplay-to: $from\r\nContent-type: text/html; charset=utf-8\r\n";
    mail($to, $subject, $message, $headers);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form name="myForm" action="email.php" method="post">
            <p>
                <input type="text" name="login" value="login">
                <input type="text" name="pass" value="password">
                <input type="text" name="email" value="e-mail">
                <input type="submit" name="post" value="Отправить">
            </p>
        </form>
    </body>
</html>
