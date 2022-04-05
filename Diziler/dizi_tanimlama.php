<?php

$sayilar = array(1,2,3,4,5);
$isimler = array("Doğukan", "Dora");
echo "<h3>Dizi Elemanlarını Teker Teker Yazdırma</h3>";
echo "1. Sayı : $sayilar[0] <br>";
echo "2. Sayı : $sayilar[1] <br>";
echo "3. Sayı : $sayilar[2] <br>";
echo "4. Sayı : $sayilar[3] <br>";
echo "5. Sayı : $sayilar[4] <br>";

#Döngüler - Loop ile aynı işlemi birden fazla yaptırabiliriz
echo "<h3>Döngü ile Yazdırma</h3>";
for($i=0;$i<count($sayilar);$i++)
{
    echo ($i+1).". Sayı : $sayilar[$i] <br>";
}

echo "1. İsim : $isimler[0] <br>";
echo "2. İsim : $isimler[1] <br>";

#Dizinin elemanlarını sonradan değiştirebiliriz.
echo "<h3>Dizinin Elemanlarını Değiştirme</h3>";
$sayilar[0] = "bir";
$sayilar[1] = "iki";
$sayilar[2] = "üç";
$sayilar[3] = "dört";
$sayilar[4] = "beş";
for($i=0;$i<count($sayilar);$i++)
echo ($i+1).". Sayı : $sayilar[$i] <br>";

#Diziye sonradan eleman ekleyebiliriz
echo "<h3>Diziye Yeni Eleman Ekleme</h3>";
$sayilar[5] = "altı";
echo $sayilar[5]."<br>";

#Diziye string içinden eleman ekleyebiliriz
echo "<h3>Stringi Parçalayarak Dizi İçerisine Eleman Ekleme</h3>";
$markalar = "bmw,audi,toyota";
$markalar2 = explode(",", $markalar);       #Virgüllerden ayırarak $markalar2 adlı dizi içerisine eleman olarak at
for($i=0;$i<count($markalar2);$i++)
echo "Araba Markası : ".$markalar2[$i]."<br>";
?>