<?php

class myText {
    public static $dir = "text";

    public static function readfile($file) {
        return file_get_contents(self::$dir . "/" . $file);
    }

    public static function writefile($file, $str) {
        return file_put_contents(self::$dir . "/" . $file, $str);
    }

    public static function clearfile($file) {
        return file_put_contents(self::$dir . "/" . $file, "");
    }
}
echo myText::readfile("text1.txt") . "<br />";
$str = "sfdssds sfsdsd sfsdfds";
echo myText::writefile("text2.txt", $str) . "<br />";
myText::clearfile("text2.txt");
echo myText::readfile("text2.txt") . "<br />";
?>
