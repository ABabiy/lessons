<?php
    $data = "Имя: <b>" . ($_POST["name"] . "</b>   " . "Комментарий: <b>" . 
        $_POST["comment"] . "</b><br>");
    file_put_contents("comment.txt", $data, FILE_APPEND);
?>
<form name="form" action="file.php" method="post">
    <input type="text" name="name" value="Имя">
    <input type="text" size="50" name="comment" value="Комментарий">
    <input type="submit" name="send" value="Отправить">
</form>
<?php
    echo file_get_contents("comment.txt");
?>