<?php

#Associative Arrays
#Keys-Values
#41 - Kocaeli // 35 - İzmir gibi key ve value taşıyan diziler

#Normal array dizi ile tutulabilir fakat kullanmamız gerektiğinde her diziden ayrı ayrı çağırmak zorunda kalırız.
#İlk atanan değer Key değeri, 2. atanan değer ise bu key değerine ait Value değeridir.
echo "<h3>Normal Dizi ile Tanımlama</h3>";
$plakalar = array("34", "35");
$sehirler = array("İstanbul", "İzmir");
echo "<strong>Plaka : </strong>".$plakalar[0]."<strong> - Şehir : </strong>".$sehirler[0]."<br>";

#Associative Dizi ile Tanımlama
echo "<h3>Associative Dizi (Key-Value) ile Tanımlama</h3>";
$plakaBilgileri = array("34"=>"İstanbul", "35"=>"İzmir", "52"=>"Ordu");
echo $plakaBilgileri["35"]."<br>";  #35 ile ilişkilendirilmiş değeri yazdırır. Ekrana İzmir çıktısını verir
echo $plakaBilgileri["52"]."<br>";  #52 ile ilişkilendirilmiş değeri yazdırır. Ekrana Ordu çıktısını verir

#Diziye ekleme yapabiliriz
echo "<h3>Associative Diziye Eleman Ekleme</h3>";
$plakaBilgileri["61"] = "Trabzon";
echo $plakaBilgileri["61"]."<br>";  #61 ile ilişkilendirilmiş değeri yazdırır. Ekrana Trabzon çıktısını verir

#Dizinin elemanını değiştirebiliriz.
echo "<h3>Value Değerini Değiştirme</h3>";
$plakaBilgileri["52"] = "Ordu/Ünye"; #Value değeri Ordu olan 52 Key'inin value değerini Ordu/Ünye yapar
echo $plakaBilgileri["52"]."<br>";   #52 ile ilişkilendirilmiş değeri yazdırır. Ekrana Ordu/Ünye çıktısını verir
?>