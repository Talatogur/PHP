<?php

error_reporting(0);
$ad = $_POST["ad"];
$yas = $_POST["yas"];
$maas = $_POST["maas"];

$db = new PDO("mysql:host=localhost;dbname=buca;charset=utf8", "root", "");
$ekle = $db->query("INSERT INTO bil (ad,yas,maas) VALUES ('$ad', '$yas', '$maas')");
echo $yas;
if ($ekle)
{
    echo "Başarıyla Eklendi <br>";
}
else
{
    echo "Eklenmedi <br>";
}
header('Location:giris.html');

?>