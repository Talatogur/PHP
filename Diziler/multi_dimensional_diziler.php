<?php

$ogrenciA = array("Doğukan TEKİN", array(60,70,50));
$ogrenciB = array("Dora Tekin", array(75,80,60));

echo "Ad / Soyad : ".$ogrenciA[0]."<br>";       #$ogrenciA adlı değişkenin ilk elemanını verir. Ekrana Doğukan TEKİN çıktısı gelir
echo "1. Not : ".$ogrenciA[1][0]."<br>";        #$ogrenciA adlı değişkenin ikinci elemanını verir. İkini elemanı da bir dizi olduğu için yine hangi elemanı istediğimizi belirtmemiz gerekir. Burada $ogrenciA[1] ifadesi array(60,70,50)'dir. $ogrenciA[1][0] ifadesi ise 60 değerine denk gelmektedir. Ekrana 60 çıktısını verir.
echo "2. Not : ".$ogrenciA[1][1]."<br>";        #Burada ekrana gelecek olan değer array(60,70,50)'den 70'dir. Ekrana 70 çıktısı gelir.
echo "3. Not : ".$ogrenciA[1][2]."<br>";        #Burada ekrana gelecek olan değer array(60,70,50)'den 50'dir. Ekrana 50 çıktısı gelir.

#Öğrencinin Not Ortalamasını Hesaplama
#Yöntem 1
echo "<h3>Öğrencinin Not Ortalamasını Hesaplama / Değişkene Değer Atayıp</h3>";
echo $ogrenciA[0]." isimli öğrencinin not ortalaması : ";
$ortalamaA = ($ogrenciA[1][0] + $ogrenciA[1][1] + $ogrenciA[1][2]) / 3;
echo $ortalamaA."<br>";
echo gettype($ortalamaA)."<br>";

#Yöntem 2
echo "<h3>Öğrencinin Not Ortalamasını Hesaplama / Öğrenciye Ait Diziye Veri Ekleyerek</h3>";
$ogrenciA[2] = ($ogrenciA[1][0] + $ogrenciA[1][1] + $ogrenciA[1][2]) / 3;
echo $ogrenciA[0]." isimli öğrencinin not ortalaması : ".$ogrenciA[2]."<br>";
echo gettype($ogrenciA[2])."<br>";

#Yöntem 3
echo "<h3>Öğrencinin Not Ortalamasını Hesaplama / Öğrenciye Ait Diziye Veri Ekleyerek / Dizinin Boyutunu Bilmediğimizi Varsayarak</h3>";
$ogrenciA[count($ogrenciA)] = ($ogrenciA[1][0] + $ogrenciA[1][1] + $ogrenciA[1][2]) / 3;
echo $ogrenciA[0]." isimli öğrencinin not ortalaması : ".$ogrenciA[count($ogrenciA) - 1]."<br>";
echo gettype($ogrenciA[count($ogrenciA) - 1])."<br>";                               #Hesaplanan değerin veri tipini öğrenme

#$ogrenciB'nin Ortalaması
echo "<h3>\$ogrenciB'nin Ortalaması / Hesaplanan Değeri Bir Yere Atama Yapmadan</h3>";
echo $ogrenciB[0]." isimli öğrencinin not ortalaması : ".(($ogrenciB[1][0] + $ogrenciB[1][1] + $ogrenciB[1][2])/3)."<br>";
echo gettype((($ogrenciB[1][0] + $ogrenciB[1][1] + $ogrenciB[1][2])/3))."<br>";     #Hesaplanan değerin veri tipini öğrenme

#Associative Dizi ile Çok Boyutlu Dizi Tanımlama
echo "<h3>Associative Dizi Kullanarak Çok Boyutlu Dizi Tanımlama</h3>";
$ogrenciC = array(
    #100 numaralı öğrencinin bilgileri
    "100" => array(
        "Ad"=>"Doğukan",
        "Soyad"=>"TEKİN",
        "VisualBasic"=>array(93,100,100),
        "C#"=>array(85,100)
    ),
    #101 numaralı öğrencinin bilgileri
    "101" => array(
        "Ad"=>"Dora",
        "Soyad"=>"Tekin",
        "VisualBasic"=>array(85,79,94),
        "C#"=>array(76,94)
    ),
    #102 numaralı öğrencinin bilgileri
    "102" => array(
        "Ad"=>"Ali",
        "Soyad"=>"Arslan",
        "VisualBasic"=>array(77,76,90),
        "C#"=>array(44,92)
    )
);
#101 numaralı öğrencinin ad,soyad,vb notları, vb ortalaması, c# notları, c# ortalaması ekrana yazdırılmıştır
echo "<h5>1. Öğrenci</h5>";
echo "Ad : ".$ogrenciC["100"]["Ad"]."<br>";
echo "Soyad : ".$ogrenciC["100"]["Soyad"]."<br>";
echo "Visual Basic Notları : ".$ogrenciC["100"]["VisualBasic"][0]." ".$ogrenciC["100"]["VisualBasic"][1]." ".$ogrenciC["100"]["VisualBasic"][2]."<br>";
echo "Visual Basic Not Ortalaması : ".(($ogrenciC["100"]["VisualBasic"][0] + $ogrenciC["100"]["VisualBasic"][1] + $ogrenciC["100"]["VisualBasic"][2])/3)."<br>";
echo "C# Notları : ".$ogrenciC["100"]["C#"][0]." ".$ogrenciC["100"]["C#"][1]."<br>";
echo "C# Not Ortalaması : ".(($ogrenciC["100"]["C#"][0] + $ogrenciC["100"]["C#"][1])/2)."<br>";

#101 numaralı öğrencinin ad,soyad,vb notları, vb ortalaması, c# notları, c# ortalaması ekrana yazdırılmıştır
echo "<h5>2. Öğrenci</h5>";
echo "Ad : ".$ogrenciC["101"]["Ad"]."<br>";
echo "Soyad : ".$ogrenciC["101"]["Soyad"]."<br>";
echo "Visual Basic Notları : ".$ogrenciC["101"]["VisualBasic"][0]." ".$ogrenciC["101"]["VisualBasic"][1]." ".$ogrenciC["101"]["VisualBasic"][2]."<br>";
echo "Visual Basic Not Ortalaması : ".(($ogrenciC["101"]["VisualBasic"][0] + $ogrenciC["101"]["VisualBasic"][1] + $ogrenciC["101"]["VisualBasic"][2])/3)."<br>";
echo "C# Notları : ".$ogrenciC["101"]["C#"][0]." ".$ogrenciC["101"]["C#"][1]."<br>";
echo "C# Not Ortalaması : ".(($ogrenciC["101"]["C#"][0] + $ogrenciC["101"]["C#"][1])/2)."<br>";

#102 numaralı öğrencinin ad,soyad,vb notları, vb ortalaması, c# notları, c# ortalaması ekrana yazdırılmıştır
echo "<h5>3. Öğrenci</h5>";
echo "Ad : ".$ogrenciC["102"]["Ad"]."<br>";
echo "Soyad : ".$ogrenciC["102"]["Soyad"]."<br>";
echo "Visual Basic Notları : ".$ogrenciC["102"]["VisualBasic"][0]." ".$ogrenciC["102"]["VisualBasic"][1]." ".$ogrenciC["102"]["VisualBasic"][2]."<br>";
echo "Visual Basic Not Ortalaması : ".(($ogrenciC["102"]["VisualBasic"][0] + $ogrenciC["102"]["VisualBasic"][1] + $ogrenciC["102"]["VisualBasic"][2])/3)."<br>";
echo "C# Notları : ".$ogrenciC["102"]["C#"][0]." ".$ogrenciC["102"]["C#"][1]."<br>";
echo "C# Not Ortalaması : ".(($ogrenciC["102"]["C#"][0] + $ogrenciC["102"]["C#"][1])/2)."<br>";
?>
