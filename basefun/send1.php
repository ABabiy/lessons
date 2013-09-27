<?php
    session_start();
        if($_GET["send"] == 1){
            echo "Регистрация прошла успешно! Пользователь ".$_SESSION["login"].
                " с паролем ".$_SESSION["password"]." зарегистрирован. На ".$_SESSION["email"]." отправлено 
                письмо с регистрацилнными данными.";
            $_SESSION["tmpuser"] = "";
            echo "<br /><a href='final.php'>Вернуться</a>";        }
?>
