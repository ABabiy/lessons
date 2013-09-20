<?php
    $array = parse_ini_file("test.ini");
    print_r ($array);
    echo $array["bg-color"];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Парсинг INI файла</title>
<style>
   body { color: black; background: <?=$array["bg-color"]?>; font-size: <?=$array["font-size"]?>;}
   em { font-style: normal; color: red;}
</style>        
    </head>
    <body>
        <p>
            Тестовая надпись!
        </p>
    </body>
</html>