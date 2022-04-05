<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veri Tipleri</title>
</head>
<body>
    
<?php
/* 
    Veri Tipleri
String      -> Metinsel Bilgiler
int         -> Tam Sayılar
Double      -> Ondalıklı Sayılar
Boolean     -> True/False Mantıksal Veri
Object      -> Nesne
Array       -> Diziler
Null        -> Değer İçermeyen Değişkenler
*/
$urunAdi = "IPhone 12";     # String İfade
echo gettype($urunAdi);     # $urunAdi adlı değişkenin veri tipini ekrana yazdırır
echo "<br>";

$fiyat = 9000;              # Tam sayı / integer İfade
echo gettype($fiyat);       # $fiyat adlı değişkenin veri tipini ekrana yazdırır
echo "<br>";

$kdvOrani = 0.18;           # Ondalıklı sayı / Double İfade
echo gettype($kdvOrani);    # $kdvOrani adlı değişkenin veri tipini ekrana yazdırır
echo "<br>";

$satista_Mi = True;         # True/False // Mantıksal İfade
echo gettype($satista_Mi);  # $satista_Mi adlı değişkenin veri tipini ekrana yazdırır
echo "<br>";

#Integer To Double // Convert
$sayi = (double)10;         # Tam Sayı olarak girdik fakat başına double çevirmesi yaptık. Veri DOUBLE türündedir
echo gettype($sayi);        # $sayi adlı değişkenin veri tipini ekrana yazdırır
echo " -> ";
echo $sayi;                 # $sayi değişkeninin değerini ekrana yazdırır.
echo "<br>";

#Double To Integer // Convert
$sayi2 = (int)10.5;         # Double girdik fakat başına integer çevirmesi yaptık.
echo gettype($sayi2);       # $sayi2 adlı değişkenin veri tipini ekrana yazdırır
echo " -> ";
echo $sayi2;                # $sayi2 değişkeninin değerini ekrana yazdırır
echo "<br>";

#String To Integer // Convert
$sayi3 = (int)"10";         # String girdik fakat başına integer çevirmesi yaptık.
echo gettype($sayi3);       # $sayi3 adlı değişkenin veri tipini ekrana yazdırır
echo " -> ";
echo $sayi3;                # $sayi3 değişkeninin değerini ekrana yazdırır
echo "<br>";
#Stringi çevirirken "a20" yazarsak başta a yı görür ve ifadeyi 0 yapar. Değer string("a20")'en int(0) olur.
#"20a" yazarsak başta 2 ve 0 ı görüp değeri 20 alır. Çeviremediği kısımla ilgilenmez. Değer string("20a")'dan int(20) olur.

#Boolean To Integer // Convert
$sayi4 = (int)True;         # Boolean girdik ve int değerini aldık
echo gettype($sayi4);       # $sayi4 adlı değişkenin veri tipini ekrana yazdırdık
echo " -> ";
echo $sayi4;                # $sayi4 değişkeninin değerini ekrana yazdırdık
echo "<br>";
$sayi5 = (int)False;        # Boolean girdik ve int değerini aldık
echo gettype($sayi5);       # $sayi5 adlı değişkenin veri tipini ekrana yazdırdık
echo " -> ";
echo $sayi5;                # $sayi5 değişkeninin değerini ekrana yazdırdık
echo "<br>";
#True = 1 // False = 0 olarak integer türüne dönüşür.
?>
</body>
</html>