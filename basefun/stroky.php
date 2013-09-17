<?php
echo "<center>";
for ($i = 1; $i <= 5; $i++) {
    $str = chr(mt_rand(33, 125));
    echo "<font size=40pt>" . $str . "</font>";
}
echo "</center>";
?>
<form name="myform" action="stroky.php" method="POST" >
    <input type="text" name ="password">
    <input type ="submit" name ="post" value="отправить данные">
</form>
<?php
$x = str_replace(" ", "", trim($_POST["password"]));
echo "Ваш пароль: $x <br>";
echo "Длинна паролья: " . mb_strlen($x, "UTF-8") . "<br>";
echo "Хеш пароля: " . md5($x) . "<br>";
?>