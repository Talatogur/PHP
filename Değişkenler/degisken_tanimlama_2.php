<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Değişken Tanımlama</title>
</head>
<body>
    
    <?php     
    #Değişkenler sayısal karakter ile başlayamaz
    #Değişkenler türkçe karakter içermemeli
    #Değişken adında boşluk olamaz. Yerine _ veya - gibi ifadeler kullanmalıyız
    #$1sayi      -> Yanlış kullanım
    #$sayi 1     -> Yanlış kullanım
    #Değişken adları büyük-küçük harf duyarlıdır
    #$a ile $A aynı değişken değildir
    $sayi1 = 10;
    $sayi2 = 20;
    echo "<h1>, ile Yazdırma</h1>",$sayi1," ",$sayi2;
    echo "<h1>. ile Yazdırma</h1>",$sayi1," ",$sayi2;    
    $sayi1 = 30;
    echo "<h1>Değişkene Yeni Değer Atama</h1>",$sayi1," ",$sayi2;
    $isim = "Doğukan";
    $soyisim = "TEKİN";
    echo "<h1>String İfade Yazdırma</h1>",$isim," ",$soyisim;
    ?>
</body>
</html>