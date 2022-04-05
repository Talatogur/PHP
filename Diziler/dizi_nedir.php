<?php

$marka1 = "bmw";
$marka2 = "audi";
$marka3 = "toyota";

$markalar = "bmw,audi,toyota";
#$markalar değişkeninden bmw,audi,toyota markalarından birini almak zor olacaktır.

echo "En sevdiğim araba ".$marka1."<br>";
echo "En sevdiğim araba ".$marka2."<br>";
echo "En sevdiğim araba ".$marka3."<br>";

$markalar2 = array("bmw","audi","toyota"); #Dizi tanımlaması yaptık. 3 eleman içeren bir dizi
echo gettype($markalar2)."<br>";           #$markalar2 değişkeninin türünü yazdırdık
echo $markalar2[0]."<br>";                 #Diziler de indislerden oluşur. 0. indix -> 1. elemana denk gelir. Ekrana bmw yazdırır
echo $markalar2[1]."<br>";                 #Diziler de indislerden oluşur. 1. indix -> 2. elemana denk gelir. Ekrana audi yazdırır
echo $markalar2[2]."<br>";                 #Diziler de indislerden oluşur. 2. indix -> 3. elemana denk gelir. Ekrana toyota yazdırır

echo "En sevdiğim araba ".$markalar2[0]."<br>";
echo "En sevdiğim araba ".$markalar2[1]."<br>";
echo "En sevdiğim araba ".$markalar2[2]."<br>";
?>