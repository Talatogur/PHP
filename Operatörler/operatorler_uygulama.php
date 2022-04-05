<?php

/*
    1 - a, b çarpımı ile a, b, c toplamının farkı nedir
    2 - a, b, c toplamının mod3'ü nedir
    3 - b'nin c. kuvveti nedir
    4 - a için 50-100 arasında kontrolü yapınız
    5 - a için pozitif çift kontrolü yapınız
    6 - username ve password ile uygulama giriş kontrolü yapınız
    7 - a, b, c için büyüklük kontrolü yapınız
    8 - 2 tane vize (%60) ve final (%40) notuna göre ortalama hesaplayınız
        a - Eğer ortalama 50 ve üstü ise geçti, değilse kaldı yazsın
        b - Geçmek için ortalama 50 olsa bile final notu en az 50 olmalıdır
        c - Final notu 70 ise ortalamadan bağımsız olarak geçmiş sayılsın
*/

$username = "dogukantekin";
$password = "1234";
$a = 10;
$b = 4;
$c = 5;
$vize1 = 50;
$vize2 = 50;
$final = 68;

echo "<h1>Operatör Uygulamaları</h1>";
echo "<h3>Soru 1</h3>";
echo (($a * $b) - ($a + $b + $c))."<br>";

echo "<h3>Soru 2</h3>";
echo (($a + $b + $c) % 3)."<br>";

echo "<h3>Soru 3</h3>";
echo ($b**$c)."<br>";

echo "<h3>Soru 4</h3>";
$sonuc = ($a > 50 and $a < 100);
echo var_dump($sonuc);

echo "<h3>Soru 5</h3>";
$sonuc = ($a > 0 and $a % 2 == 0);
echo var_dump($sonuc);

echo "<h3>Soru 6</h3>";
$sonuc = ($username == "dogukantekin" and $password == "1234");
echo var_dump($sonuc);

echo "<h3>Soru 7</h3>";
echo max($a, $b, $c);

echo "<h3>Soru 8</h3>";
$ortalama = ((($vize1 + $vize2)*0.6) + ($final * 0.4));
$sonuc = (($ortalama >= 50 and $final >= 50) or ($final >= 70));
echo var_dump($sonuc);
?>