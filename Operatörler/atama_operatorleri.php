<?php

/*
    a = b       ->a = b
    a += b      ->a = a + b
    a -= b      ->a = a - b
    a *= b      ->a = a * b
    a /= b      ->a = a / b
    a %= b      ->a = a % b
    a **= b      ->a = a ** b
    a .= b      ->a = a . b
*/

$a = 10;
$b = 3;
echo "<h2>Atama Operatörleri</h2>";
#$a=$b
echo "<h4>\$a=\$b</h4>";
echo "\$a=$a, \$b=$b <br>";
echo "\$a=\$b ifadesi \$b'nin değerini \$a'ya atar. <br>";
$a = $b;
echo "\$a=$a, \$b=$b <br>";

#$a+=$b
echo "<h4>\$a+=\$b</h4>";
$a = 10;
echo "\$a=$a, \$b=$b <br>";
echo "\$a+=\$b ifadesi \$b'nin değerini \$a ile toplayıp \$a'ya atar. <br>";
$a += $b;
echo "\$a=$a, \$b=$b <br>";

#$a-=$b
echo "<h4>\$a-=\$b</h4>";
$a = 10;
echo "\$a=$a, \$b=$b <br>";
echo "\$a-=\$b ifadesi \$b'nin değerini \$a dan çıkartıp \$a'ya atar. <br>";
$a -= $b;
echo "\$a=$a, \$b=$b <br>";

#$a*=$b
echo "<h4>\$a*=\$b</h4>";
$a = 10;
echo "\$a=$a, \$b=$b <br>";
echo "\$a*=\$b ifadesi \$b'nin değerini \$a ile çarpıp \$a'ya atar. <br>";
$a *= $b;
echo "\$a=$a, \$b=$b <br>";

#$a/=$b
echo "<h4>\$a/=\$b</h4>";
$a = 10;
echo "\$a=$a, \$b=$b <br>";
echo "\$a/=\$b ifadesi \$a'nın değerini \$b ile bölüp \$a'ya atar. <br>";
$a /= $b;
echo "\$a=$a, \$b=$b <br>";

#$a%=$b
echo "<h4>\$a%=\$b</h4>";
$a = 10;
echo "\$a=$a, \$b=$b <br>";
echo "\$a%=\$b ifadesi \$a'yı \$b'ye böler ve kalanı \$a'ya atar. <br>";
$a %= $b;
echo "\$a=$a, \$b=$b <br>";

#$a**=$b
echo "<h4>\$a**=\$b</h4>";
$a = 10;
echo "\$a=$a, \$b=$b <br>";
echo "\$a**=\$b ifadesi \$a'nın \$b kadar üssünü alır ve \$a'ya atar. <br>";
$a **= $b;
echo "\$a=$a, \$b=$b <br>";

#$a.=$b
echo "<h4>\$a.=\$b</h4>";
$a = 10;
echo "\$a=$a, \$b=$b <br>";
echo "\$a.=\$b ifadesi \$a'nın devamına \$b'nin değerini yazar ve \$a'ya atar. <br>";
$a .= $b;
echo "\$a=$a, \$b=$b <br>";
echo "Bu aslında bir string birleştirme işlemi gibi düşünülebilir. Örnek olarak <br>";
$ad = "Doğukan";
$soyad = "TEKİN";
$ad .= " ".$soyad;      #$ad değişkeninden sonra 1 adet boşluk bırakıp soyad değişkeninin değerini $ad değişkenine ekler
#$ad.=$soyad yapsaydım DoğukanTEKİN olurdu. Aradaki " " ifadesi iki string arasına boşluk bıraktı
echo $ad."<br>";
?>