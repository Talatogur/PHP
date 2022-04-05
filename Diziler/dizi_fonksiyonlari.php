<?php

$sayilar = array(1,5,7,4,56,78,12,45);
$isimler = array("ali","zeynep","canan","beril");
$kullanicilar = array("dogukantekin"=>"66", "erhantekin"=>"52", "doratekin"=>"35");

#count()        -> Dizinin uzunluğunu ifade eder
echo count($sayilar)."<br>";                #Dizide 8 eleman olduğu için ekrana 8 çıktısını verir
echo count($isimler)."<br>";                #Dizide 4 eleman olduğu için ekrana 4 çıktısını verir
echo count($kullanicilar)."<br>";           #Dizide 3 eleman ( 3 key value ) olduğu için ekrana 3 çıktısını verir

echo "<h3>Sort ile Dizi Sıralama</h3>";
#sort()         -> Küçükten büyüğe sıralar. 1->9 / a->z gibi
sort($sayilar);                             #$sayilar dizisini küçükten büyüğe sıralar
sort($isimler);                             #$isimler dizisini a'dan z'ye doğru sıralar
asort($kullanicilar);                       #$kullanicilar dizisini value değerlerine göre küçükten büyüğe sıralar
print_r($sayilar);                          #$sayilar dizisini yazdırır
echo "<br>";
print_r($isimler);                          #$isimler dizisini yazdırır
echo "<br>";
print_r($kullanicilar);                     #$kullanicilar dizisini yazdırır
echo "<br>";
ksort($kullanicilar);                       #$kullanicilar dizisini key değerlerine göre küçükten büyüğe sıralar
print_r($kullanicilar);
echo "<br><br>";

echo "<h3>RSort ile Dizi Sıralama</h3>";
#rsort()         -> Büyükten küçüğe sıralar. 9->1 / z->a gibi
rsort($sayilar);                             #$sayilar dizisini büyükten küçüğe sıralar
rsort($isimler);                             #$isimler dizisini z'den a'ya doğru sıralar
arsort($kullanicilar);                       #$kullanicilar dizisini value değerlerine göre büyükten küçüğe sıralar
print_r($sayilar);                           #$sayilar dizisini yazdırır
echo "<br>";
print_r($isimler);                           #$isimler dizisini yazdırır
echo "<br>";
print_r($kullanicilar);                      #$kullanicilar dizisini yazdırır
echo "<br>";
krsort($kullanicilar);                       #$kullanicilar dizisini key değerlerine göre büyükten küçüğe sıralar
print_r($kullanicilar);
echo "<br><br>";


#String To Array
echo "<h3>String To Array</h3>";
$bilgiler_string = "dogukan|tekin|ünye|ordu";
$bilgiler_array = explode("|",$bilgiler_string);    #$bilgiler_string stringindeki veriyi | işaretine göre parçalayıp $bilgiler_array dizisi içerisine aktarır
print_r($bilgiler_array);
echo "<br><br>";

#Array To String
echo "<h3>Array To String</h3>";
$bilgiler1_array = array("dogukan", "tekin", "ünye", "ordu");
$bilgiler1_string = implode(" ", $bilgiler1_array);   #$bilgiler1_array dizisindeki elemanları araya - koyarak $bilgiler1_string içerisine aktarır
echo $bilgiler1_string."<br>";

#Diziyi Rastgele Sıralama
echo "<h3>Diziyi Rastgele Sıralama</h3>";
$rastgelesirala = array(1,2,3,4,5,6,7,8,9,10);
print_r($rastgelesirala);
echo "<br>";
shuffle($rastgelesirala);                           #Dizinin elemanlarının yerlerini rastgele değiştirir
print_r($rastgelesirala);
echo "<br>";

#Dizi Birleştirme
echo "<h3>Dizi Birleştirme</h3>";
$plakalar = array("35", "52");
$sehirler = array("İzmir", "Ordu");
$plakalar_sehirler = array_combine($plakalar, $sehirler);   #$plakalar dizisinin 1. ve 2. elemanı ile $sehirler dizisinin 1. ve 2. elemanını birleştirdi
print_R($plakalar_sehirler);
echo "<br><br>";

#Dizi Birleştirme 2
echo "<h3>Dizi Birleştirme 2</h3>";
$dizi1 = ["istanbul", "izmir"];
$dizi2 = ["ordu", "muğla"];
$dizibirlestir = array_merge($dizi1, $dizi2);               #istanbul, izmir, ordu, muğla olarak 4 elemanlı dizi oluşturur
print_r($dizibirlestir);
echo "<br>";

#Dizide Tekrarlanan Eleman Sayıları
echo "<h3>Dizide Tekrarlanan Eleman Sayısı</h3>";
$dizi = [1,2,3,4,1,2,1,1,1,4,5,6,7,1,2,1,1,9];
print_r(array_count_values($dizi));                         #$dizi dizisindeki elemanların kaçar kere tekrar ettiğini yazdırır
echo "<br>";

#Dizinin Sonuna Eleman Ekleme
echo "<h3>Dizinin Sonuna Eleman Ekleme</h3>";
$dizi = [1,2,3,4,5];
array_push($dizi, 6);                                       #$dizi adlı dizinin sonuna yeni bir eleman ekler. Eklenen elemanın değeri 6 dır. Integer türünde eklendi
print_r($dizi);
echo "<br>";

#Dizinin Başına Eleman Ekleme
echo "<h3>Dizinin Başına Eleman Ekleme</h3>";
$dizi = [1,2,3,4,5];
array_unshift($dizi, 0);                                       #$dizi adlı dizinin başına yeni bir eleman ekler. Eklenen elemanın değeri 0 dır. Integer türünde eklendi
print_r($dizi);
echo "<br>";
?>