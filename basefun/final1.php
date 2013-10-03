<?php
$str = "<a href='page.php'>Страница</a><br /><p><a href='http://mysite.ru/index.php'>Главная</a></p>";
$site = "http://mysite.ru/";
echo "$str<br />";
//$patterns = "#href\s*=\s*\"\s*(?!http:\/\/)#";
$patterns = "#href\s*=\s*\'\s*(?!http\:\/\/)#";
$replace = "href='http://mysite.ru/";
$rez = preg_replace($patterns, $replace, $str);
echo $rez;
echo "<br>";
?>
