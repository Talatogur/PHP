<?php

echo "<h1> Switch Case Kullanımı </h1>";
echo "<h3> Örnek Uygulama 1 </h3>";
echo "<h4> İf ile Kontrol </h4>";
$sayi = 3;
if ($sayi == 3) {
    echo "Sayı 3'e eşittir. <br>";
} elseif ($sayi == 4) {
    echo "Sayı 4'e eşittir. <br>";
} else {
    echo "Sayı 3'e ve 4'e eşit değildir. <br>";
}

#Üstteki if kontrolünü switch ile yapalım
echo "<h4> Switch ile Kontrol </h4>";
switch ($sayi) {
    case 3:
        echo "Sayı = 3";
        break;              #braeak; kullanılmazsa koşul sağlandıktan sonra diğerlerini de kontrol etmeye devam eder.
    case 4:
        echo "Sayı = 4";
        break;
    default:               #if'te kullandığımız else koşuluna denk gelir. Eğer hiçbir case çalışmazsa default case kodları çalışır
        echo "Sayı 3 veya 4 değil";
        break;
}

echo "<h3> Örnek Uygulama 2 </h3>";
$not = 60;
echo "<h4> İf ile Kontrol </h4>";
if ($not >= 0 and $not < 25) {
    echo "notunuz: 0";
} elseif ($not >= 25 and $not < 45) {
    echo "notunuz: 1";
} elseif ($not >= 45 and $not < 55) {
    echo "notunuz: 2";
} elseif ($not >= 55 and $not < 70) {
    echo "notunuz: 3";
} elseif ($not >= 70 and $not < 85) {
    echo "notunuz: 4";
} elseif ($not >= 85 and $not <= 100) {
    echo "notunuz: 5";
} else {
    echo "yanlış";
}

echo "<h4> Switch ile Kontrol </h4>";
switch (true) {
    case ($not >= 0 and $not < 25):
        echo "notunuz: 0";
        break;
    case ($not >= 25 and $not < 45):
        echo "notunuz: 1";
        break;
    case ($not >= 45 and $not < 55):
        echo "notunuz: 2";
        break;
    case ($not >= 55 and $not < 70):
        echo "notunuz: 3";
        break;
    case ($not >= 70 and $not < 85):
        echo "notunuz: 4";
        break;
    case ($not >= 85 and $not <= 100):
        echo "notunuz: 5";
        break;
    default:
        echo "yanlış not girildi";
        break;
}

echo "<h3> Örnek Uygulama 3 </h3>";
$ay = "temmuz";
switch($ay)
{
    case "ocak";
    case "şubat";
        echo "Kış Mevsimi";
        break;
    case "nisan";
    case "mayıs";
        echo "İlkbahar Mevsimi";
        break;
    case "temmuz":
        echo "Yaz Mevsimi";
        break;
    case "eylül":
    case "ekim":
        echo "Sonbahar Mevsimi";
        break;
    default:
        echo "Yanlış Ay Girildi";
        break;
}
?>