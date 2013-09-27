<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php 
        if ($_POST["login"] == "Admin" and $_POST["password"] == "mypass") {
            echo "Здравствуйте, ". $_POST["login"];
            echo '<form name="myForm" action="session.php" method="post">
                    <p>
                        <input type="hidden" name="login" value="">
                        <input type="password" name="login" value="">
                        <input type="submit" name="post" value="Сбросить">
                    </p>
                </form>'; 
            }
        else{
            echo "Логин и/или пароль неверный!";    
            echo '<form name="myForm" action="session.php" method="post">
                    <p>
                        <input type="text" name="login" value="">
                        <input type="text" name="password" value="">
                        <input type="submit" name="post" value="Отправить">
                    </p>
                </form>'; 
        }
        $_SESSION["login"] = $_POST["login"];
        $_SESSION["password"] = $_POST["password"];
        echo $_SESSION["login"] . "<br />"; echo $_SESSION["password"] . "<br />";
        ?>
        <?php
        // put your code here
        ?>
    </body>
</html>
