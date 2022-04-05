<?php
echo "<h1>For Each Döngüsü</h1>";
echo "<h3>For Each ile İsimleri Yazdırma </h3>";
$isimler = ["Doğukan", "Dora", "Özlem"];
foreach ($isimler as $isim)
{
    echo $isim."<br>";
}

$urunler = array(
    array("IPhone 11", 7000),
    array("IPhone 12", 8000),
    array("IPhone 12 Pro", 9000)
);
foreach ($urunler as $urun)
{
    print_r($urun);
    echo "<br>";
}
foreach ($urunler as $urun)
{
    echo "<strong>Ürün Adı : </strong>".$urun[0]." / <strong> Ürün Fiyatı : </strong>".$urun[1]."<br>";
}


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
foreach ($arabalar as $araba => $bilgi)
{
    echo "Marka : ".$araba." Bilgiler : ".$bilgi["marka"]." - ".$bilgi["model"]." - ".$bilgi["üretimYili"]." - ".$bilgi["renk"]." - ".$bilgi["fiyat"]."<br>";
}
?>