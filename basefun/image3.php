<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $im = imagecreatetruecolor(400, 50);
            $c = imagecolorallocate($im, 255, 255, 255);
            $text = $_POST["text"];
            imagettftext($im, 20, 0, 5, 30, $c, "verdana.ttf", $text);
            imagepng($im, "text.png");
            imagedestroy($im);
        ?>
        <form name="myForm" action="image3.php" method="post">
            <p>
                <input type="text" name="text" value="">
                <input type="submit" name="post" value="Отправить">
            </p>
        </form>
        <img src ="text.png" alt="рисунок" />
    </body>
</html>
