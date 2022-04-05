<?php

echo "10 + 5 = ".(10+5)."<br>";
echo "10 - 5 = ".(10-5)."<br>";
echo "10 * 5 = ".(10*5)."<br>";
echo "10 / 5 = ".(10/5)."<br>";
echo "<br>";
echo "<h3>Değişken ile İşlem Yaptırma</h3>";
$sayi1 = 10;
$sayi2 = 5;
echo "10 + 5 = ".($sayi1+$sayi2)."<br>";
echo "10 - 5 = ".($sayi1-$sayi2)."<br>";
echo "10 * 5 = ".($sayi1*$sayi2)."<br>";
echo "10 / 5 = ".($sayi1/$sayi2)."<br>";
#değişkenin int olup olmadığını kontrol etme
echo is_int(10)."<br>";     #True değer 1 olarak döner. Ekranda "1" yazar
echo var_dump(is_int(10))."<br>";   #Sonucun türünü ve değerini yazar. Ekranda boolean(true) yazar
echo var_dump(is_int(10.3))."<br>";     #Sonucun türünü ve değerini yazar. Ekranda boolean(false) görünür.

echo is_float(10.3)."<br>";          #Girilen değer float mı diye kontrol eder
echo is_string("a")."<br>";         #Girilen değer string mi diye kontrol eder

echo is_numeric("10")."<br>";       #Girilen değer sayısal mı diye kontrol eder. String içine sayısal bile yazsak TRUE döndürür.
#Kısaca girilen değer sayısal mı veya sayısala convert edilebilir mi diye kontrol eder

echo abs(-10)."<br>";           #Girilen değerin mutlak değerini ekrana yazdırır.
echo ceil(4.1111)."<br>";          #Girilen değeri bir üst tamsayıya yuvarlar. Ekrana 5 yazdırır.
echo ceil(5)."<br>";            #Girilen değer zaten bir tamsayıysa işlem yapmaz
echo floor(4.9999)."<br>";        #Girilen değeri bir alt tamsayıya yuvarlar. Ekrana 4 yazdırır
echo floor(4)."<br>";           #Girilen değer zaten bir tamsayıysa işlem yapmaz
echo round(4.501)."<br>";       #Girilen değeri en yakın tamsayıya yuvarlar Ekrana 5 yazdırır
echo round(4.499)."<br>";       #Girilen değeri en yakın tamsayıya yuvarlar. Ekrana 4 yazdırır
echo round(4.5)."<br>";         #Girilen değer 4.5 ise 5 e yuvarlar.
echo round(5)."<br>";           #Girilen değer tamsayı ise işlem yapmaz
echo sqrt(36)."<br>";           #Girilen sayının karekökünü yazdırır
echo sqrt(35.9999)."<br>";      #Yuvarlama yapmadan virgüllü sayıları yazdırır
echo sqrt(-10)."<br>";          #İrrasyonel sayılarla işlem yapmaz. NaN değer döndürür
echo pow(2,5)."<br>";           #2 üzeri 5 ifadesini yazdırır. Ekrana 32 çıktısını verir
echo pow(2.2, 2)."<br>";        #2.2 üzeri 2 ifadesini yazdırır. Ekrana 4.84 çıktısını verir
echo pow(2, 2.5)."<br>";        #2 üzeri 2.5 ifadesini yazdırır. Yuvarlama yapmadan hesap yapar
echo max(2,4,11,22,46,12,5412,12,54,34,521,41,266)."<br>";  #Girilen değerler arasından en büyüğünü ekrana yazdırır
echo min(2,4,11,22,46,12,5412,12,54,34,521,41,266)."<br>";  #Girilen değerler arasından en küçüğünü ekrana yazdırır
?>