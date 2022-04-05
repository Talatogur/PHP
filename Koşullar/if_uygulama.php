<?php

/*
    1 - a için 50-100 arasında kontrolü yapınız
    2 - a için pozitif çift kontrolü yapınız
    3 - username ve password ile uygulama giriş kontrolü yapınız
    4 - a, b, c için büyüklük kontrolü yapınız
    5 - 2 tane vize (%60) ve final (%40) notuna göre ortalama hesaplayınız
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
$final = 70;

echo "<h1>Operatör Uygulamaları</h1>";

echo "<h3>Soru 1</h3>";
if ($a > 50 and $a < 100)
{
    echo "Sayı 50 ile 100 arasındadır. <br>";
}
else
{
    echo "Sayı 50 ile 100 arasında değildir. <br>";
}

echo "<h3>Soru 2</h3>";
if ($a > 0 and $a % 2 == 0)
{
    echo "Sayı çift ve pozitif. <br>";
}
else
{
    if ($a < 0)
    {
        echo "Sayı negatif. <br>";
    }
    else
    {
        echo "Sayı tek. <br>";
    }
}

echo "<h3>Soru 3</h3>";
if ($username == "dogukantekin" and $password == "1234")
{
    echo "Giriş Başarılı. <br>";
}
else
{
    echo "Hatalı Kullanıcı Adı veya Şifre. <br>";
}

echo "<h3>Soru 4</h3>";
if ($a > $b and $a > $c)
{
    echo "Büyük sayı : $a <br>";
}
elseif ($b > $a and $b > $c)
{
    echo "Büyük sayı : $b <br>";
}
else
{
    echo "Büyük sayı : $c <br>";
}

echo "<h3>Soru 5</h3>";
$ortalama = ((($vize1 + $vize2)*0.3) + ($final*0.4));
if ($ortalama >= 50)
{
    if ($final < 50)
    {
        echo "Final notu 50'den düşük olduğu için geçemedi <br>";
    }
    else
    {
        echo "Ortalama ile geçti <br>";
    }
}
elseif ($final >= 70)
{
    echo "Ortalama 50'den düşük fakat final notu 70 veya üzeri olduğu için geçti <br>";
}
else
{
    echo "Kaldı <br>";
}
?>