<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" charset=UTF-8"> 
<!--        content="text/html-->
        <title></title>
    </head>
    <body>
        <?php
            $im = imageCreateFromJpeg("123.jpg");
            header("Content-type: image/jpeg");
            imagejpeg($im);
            imagedestroy($im);
            //header("Content-type: text/html")
        ?>
        <form name="myForm" action="image1.php" method="post">
            <p>
                <input type="text" name="x" value="x">
                <input type="text" name="y" value="y">
                <input type="submit" name="post" value="Отправить">
            </p>
        </form>
    </body>
</html>
