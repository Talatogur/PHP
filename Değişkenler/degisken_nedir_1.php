<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Değişkenler</title> 
</head>
<body>
    <?php
    echo "<h1>Sayısal Değer ile Yazdırma</h1>";
    echo "1. Ürün ";
    echo 5000 + (5000*0.18);
    echo "<br>";
    echo "2. Ürün ";
    echo 6000 + (6000*0.18);
    //Değişken Tanımlayarak Yapalım
    echo "<h1>Değişken Tanımlayarak Yazdırma</h1>";
    $urunA = 5000;
    $urunB = 6000;
    $kdvOrani = 0.18;
    echo "1. Ürün ";
    echo $urunA + ($urunA * $kdvOrani);
    echo "<br>";
    echo "2. Ürün ";
    echo $urunB + ($urunB * $kdvOrani);
    ?>
</body>
</html>