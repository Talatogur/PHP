<?php

/*
+       -> Toplama
-       -> Çıkarma
*       -> Çarpma
/       -> Bölme
%       -> Mod Alma
**      -> Üs Alma
++$x    -> İşlem Öncesi Arttırma
--$x    -> İşlem Öncesi Azaltma
$x++    -> İşlem Sonrası Arttırma
$x--    -> İşlem Sonrası Azaltma
*/

$a = 10;
$b = 5;

echo $a." + ".$b." = ".($a + $b)."<br>";        #a + b
echo $a." - ".$b." = ".($a - $b)."<br>";        #a - b
echo $a." * ".$b." = ".($a * $b)."<br>";        #a * b
echo $a." / ".$b." = ".($a / $b)."<br>";        #a / b
echo $a." % ".$b." = ".($a % $b)."<br>";       #a'nın b'ye bölümünden kalan
echo $a." ** ".$b." = ".($a ** $b)."<br>";      #a üzeri b

echo ++$a."<br>";                               #$a = 10, yazdırma işlemi yapılmada önce $a'yı 1 arttır. Ekran çıktısı 11 olur
$a = 10;                                        #Şa bir üst satırda 11 olmuştu. Tekrar 10 değerini aldı
echo --$a."<br>";                               #$a = 10, yazdırma işlemi yapılmada önce $a'yı 1 azalt. Ekran çıktısı 9 olur
$a = 10;
echo $a++."<br>";                               #$a = 10, önce işlem yap sonra $a'yı 1 arttır. Ekran çıktısı 10 olur fakat $a'nın değeri 11 olur
$a = 10;
echo $a--."<br>";                               #$a = 10, önce işlem yap sonra $a'yı 1 azalt. Ekran çıktısı 10 olur fakat $a'nın değeri 9 a düşer
$a = 10;
echo (10 % 3)."<br>";                           #10'un 3 ile bölümünden kalanı yazdırır. Kalan = 1, Ekran çıktısı = 1
echo (2 ** 3)."<br>";                           #2 üzeri 3 = 8, Ekran çıktısı 8 olur
?>