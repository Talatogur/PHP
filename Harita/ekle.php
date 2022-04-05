<?php
$x = $_POST["x"];
$y = $_POST["y"];
$db = new PDO ("mysql:host=localhost;dbname=tiklanan_bolgeler;charset=utf8", "root", "");
$insertquery = $db -> query("insert into tiklamalar (bolgeler) values ('".$x.",".$y."')");
?>