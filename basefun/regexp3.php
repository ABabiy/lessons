<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $text = $_POST["textarea"];
   
            function replaceHttp($text){
                $reg = "/(ht|f)tp(s?)\:\/\/[0-9a-zA-Z]([-.\w]*[0-9a-zA-Z])*(:(0-9)*)*(\/?)([a-zA-Z0-9\-\.\?\,\'\/\\\+&%\$#_]*)?/";
                preg_match_all($reg, $text, $matches, PREG_SET_ORDER);
                print_r($matches);
                return preg_replace($reg, " <b>Тут был http адрес</b> ", $text);
            }
            //echo preg_match($reg, $text);
            echo replaceHttp($text);            
        ?>
        <form name="myForm" action="regexp3.php" method="post">
            <p>
                <textarea name="textarea" rows="4" cols="20"><?=$text?></textarea>
                <input type="submit" name="post" value="Отправить">
            </p>
        </form>
    </body>
</html>
