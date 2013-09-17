<?php
require_once "../lib/function.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $mynum = array(1, 2, 3, 0);
/*
        $fruits = array("lemon", "orange", "banana", "apple");
        sort($fruits);

        foreach ($fruits as $key => $val) {
            echo "fruits[" . $key . "] = " . $val . "\n";
        }

        sort($mynum);
        for ($i = 0; $i < count($mynum); $i++) {
            echo "<br>kjhkj   " . $mynum[$i];
        }
*/
        mySortArray($mynum, TRUE);
        ?>
    </body>
</html>
