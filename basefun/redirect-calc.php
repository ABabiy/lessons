<?php
session_start();
$_SESSION["n1"] = $_POST["n1"];
$_SESSION["n2"] = $_POST["n2"];
$_SESSION["result"] = $_POST["n1"] + $_POST["n2"];
header("Location: ".$_SERVER["HTTP_REFERER"]);
exit;
?>
