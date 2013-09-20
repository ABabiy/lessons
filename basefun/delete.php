<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Удаление папок!!!!</title>
    </head>
    <body>
        <form name="myForm" action="delete.php" method="get">
            <p> 
                <input type="text" name="login" value="myuser">
                <input type="submit" name="execute" value="Delete">
            </p>
        </form>
        <?php

        function delAllFiles($dir) {
            if(is_dir($dir)) {
                $list = glob($dir . "/*");
                for ($i = 0; $i < count($list); $i++) {
                    if (is_dir($list[$i]))
                        delAllFiles($list[$i]);
                    else {
                        echo $list[$i] . "<br>";
                        unlink($list[$i]);
                    }
                }
                rmdir($dir);
            }
        }
        delAllFiles("W:\domains\\rusakov\basefun\myuser");
        ?>
    </body>
</html>
