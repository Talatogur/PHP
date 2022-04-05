<?php

/*
    1 - (1-100) arasındaki sayılardan 3e ve 5e tam bölünenleri yazdır
    2 - (20-30) arasındaki tek sayıların toplamını yazdır
    3 - (100-10) arasındaki sayıları yazdır. 100-99 şeklinde
    4 - (1-10) arasında rastgele benzersiz 5 sayı üretin
*/

echo "<h1> Sorular </h1>";
echo "<h3> Soru 1 </h3>";
/*
1 ile 100 arasında döngü kur
1 if kontrolü içinde sayı 3 e veya 5 e bölünüyor mu bak
eğer bölünüyorsa ekrana yazdır
bölünmüyorsa sayıyı 1 arttır
*/
$x = 1;
while ($x <= 100)
{
    if (($x % 3 == 0) or ($x % 5 == 0))
    {
        echo $x."<br>";
    }
    $x += 1;
}

echo "<h3> Soru 2 </h3>";
/*
20 ile 30 arasında dönen bir döngü kur
başlangıç değeri 0 olan bir değişken tanımla
döngü içinde her turda o anki sayıyı değişkenin içine ekle
döngüden çıkınca değişkeni yazdır
*/
$x = 20;
$toplam = 0;
while ($x <= 30)
{
    if ($x % 2 == 1)
    {
        $toplam += $x;
    }
    $x += 1;
}
echo $toplam."<br>";

echo "<h3> Soru 3 </h3>";
/*
100 ile 10 arasında dönen bir döngü kur
başlangıç değeri 100 olsun döngü içinde her seferinde 1 azalsın
döngünün her turunda sayıyı ekrana yazsın
*/
$x = 100;
while ($x >= 10)
{
    echo $x."<br>";
    $x -= 1;
}

echo "<h3> Soru 4 Algoritma ile</h3>";
/*
başlangıç değeri 0 olan bir değişken tanımla (döngü için)
döngüyü 0 ile 4 arasında yani toplam 5 tur döndür
döngü içinde rastgele sayı üret
üretilen rastgele sayıyı bir arraylist içine yazdır
eğer üretilen sayı daha önceden arraylist içinde varsa döngü değişkenini arttırma
sayı arraylistte yoksa döngüyü 1 tur arttır
döngü bittiğinde üretilen sayıları (arraylist içinden) ekrana yazdır
rastgele sayı üretmeyi internetten araştır
*/
$sayilar = [];
while (count($sayilar) != 5)
{
    $yeni_sayi = rand(1,10);
    if (count($sayilar) == 0)
    {
        $sayilar[count($sayilar)] = $yeni_sayi;
    }
    else
    {
        $y = 0;
        $z = 0;
        while ($y < count($sayilar))
        {
            if ($sayilar[$y] == $yeni_sayi)
            {
                $z = 1;
            }
            $y += 1;
        }
        if ($z == 0)
        {
            $sayilar[count($sayilar)] = $yeni_sayi;            
        }
    }
}

#Üretilen sayıları ekrana yazdırma
$x = 0;
while ($x < count($sayilar))
{
    echo "Üretilen ".($x+1).". Sayı : ".$sayilar[$x]."<br>";
    $x += 1;
}

echo "<h3> Soru 4 Metot ile</h3>";
$sayilar = [];
while (count($sayilar) != 5)
{
    $sayi = rand(1, 10);
    if (in_array($sayi,$sayilar) == false)
    {
        array_push($sayilar, $sayi);
    }
}
#Üretilen sayıları ekrana yazdırma
$x = 0;
while ($x < count($sayilar))
{
    echo "Üretilen ".($x+1).". Sayı : ".$sayilar[$x]."<br>";
    $x += 1;
}
?>