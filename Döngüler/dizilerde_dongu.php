<?php

echo "<h1>Dizilerde Döngü Kullanımı</h1>";
$isimler = ["Doğukan", "Dora", "Özlem"];
echo "<h3>Döngüsüz Yazdırma </h3>";
echo $isimler[0]."<br>";
echo $isimler[1]."<br>";
echo $isimler[2]."<br>";

echo "<h3>For Döngüsü ile Yazdırma</h3>";
for ($x = 0; $x < count($isimler); $x++)
{
    echo $isimler[$x]."<br>";
}

echo "<h3>While Döngüsü ile Yazdırma</h3>";
$x = 0;
while ($x < count($isimler))
{
    echo $isimler[$x]."<br>";
    $x++;
}


#
echo "<h3>Çok Boyutlu Dizi Yazdırma </h3>";
$urunler = array(
    array("IPhone 11", 7000),
    array("IPhone 12", 8000),
    array("IPhone 12 Pro", 9000)
);
for ($x = 0; $x < count($urunler); $x++)
{
    echo "<strong>Ürün Adı : </strong>".$urunler[$x][0]." / <strong>Ürün Fiyatı : </strong>".$urunler[$x][1]."<br>";
}


echo "<h3>Çok Boyutlu Dizi Key-Value Yazdırma</h3>";
$arabalar = array(
    "Araba_1" => array(
        "marka" => "Opel",
        "model" => "Corsa",
        "üretimYili" => "2018",
        "renk" => "Siyah",
        "fiyat" => "222.000",
    ),
    "Araba_2" => array(
        "marka" => "Mercedes",
        "model" => "C220",
        "üretimYili" => "2016",
        "renk" => "Bej",
        "fiyat" => "300.000",
    ),
    "Araba_3" => array(
        "marka" => "Audi",
        "model" => "A5",
        "üretimYili" => "2012",
        "renk" => "Beyaz",
        "fiyat" => "118.000",
    )
);
$keys = array_keys($arabalar);
for ($x = 0; $x < count($arabalar); $x++)
{
    echo $arabalar[$keys[$x]]["model"]."<br>";
}
?>