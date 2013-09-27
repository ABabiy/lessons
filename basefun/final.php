<?php
session_start();
$users = file_get_contents("users.txt");
if ($users == $_POST["login"]) {
    $error = true;
}
if (isset($_POST["send"]) and !isset($error)) {
    $login = $_POST["login"];
    $_SESSION["tmpuser"] = $login;
    $password = $_POST["password"];
    $email = $_POST["email"];
    $from = "ababiy@gmail.com";
    $to = "alexn@alexn.kiev.ua";
    file_put_contents("users.txt", $login);
    $message = "$login\r\n$password\r\n$email\r\n";
    $_SESSION["login"] = $login;
    $_SESSION["password"] = $password;
    $_SESSION["email"] = $email;
    $subject = "Пользователь $login с паролем $password зарегистрирован.";
    $subject = "=?utf-8?B?".base64_encode($subject)."?=";
    $headers = "From: $from\r\nReplay-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";
    mail ($to, $subject, $message, $headers);
    header("Location: send1.php?send=1");
    exit;
}
else{
    $msg = "Пользователь $login уже существует!";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form name="myForm" action="final.php" method="post">
            <table align="center">
                <tr>
                    <td>
                        <h2>login</h2>
                    </td>
                    <td>
                        <input type="text" name="login" value="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h2>password</h2>
                    </td>
                    <td>
                        <input type="text" name="password" value="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h2>email</h2>
                    </td>
                    <td>
                        <input type="text" name="email" value="">
                    </td>
                </tr>
                <tr>                    
                    <td colspan="2" valign="center" align="center">
                        <input type="submit" name="send" value="Отправить">
                    </td>
                </tr>
            </table>
        </form>
        <?php
            echo "<center>".$msg."</center>";
        ?>
    </body>
</html>
