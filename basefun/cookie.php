<?php
        if ($_GET["id"] == 'big') {
            $fontsize = "70px";
        }
        elseif ($_GET["id"] == 'medium') {
            $fontsize = "50px";    
        }
        else {
            $fontsize = "10px";
        }
        $_COOKIE["fontsize"] = $fontsize;

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Работа с куками</title>
        <style type="text/css">
            body {font-size: <?=$fontsize?> }
        </style>
    </head>
    <body>
        <?php
        //header("Locale: cookie.php");
        //setcookie("fontsize", $size);

//        echo '<font size=' . $fontsize . '><a href="?id=big">Большой шрифт</a></font><br />';
        echo '<a href="?id=big">Большой шрифт <br /><a />';
        echo '<a href="?id=medium">Средний шрифт <br /><a />';
        echo '<a href="?id=small">Мелкий шрифт <br /><a />';
//        //echo $_COOKIE["fontsize"];
//
//        echo "<br />";
//        echo $fontsize;
//        echo "<br />";
//        print_r($_GET);
        ?>
    </body>
</html>