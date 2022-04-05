<?php

$mesaj = "My name is Doğukan Tekin";
#izin verilmeyen yazımlarda \ kullanabiliriz.
$mesaj2 = 'My name\'s Doğukan Tekin';
echo $mesaj."<br>";
echo $mesaj2;
echo "<br>";

$ad = "Doğukan";
$soyad = "TEKİN";
$sehir = "İzmir";
$mesaj3 = "My name's $ad $soyad and im living in $sehir";

#$ad ve $soyad ifadesi gerçekten kendisi olarak gözükecekse başına \ getirip sayfaya yazdırabiliriz
$mesaj4 = "My name's \$ad \$soyad and im living in \$sehir";
echo $mesaj3."<br>";
echo $mesaj4;
echo "<br>";

#değişkenleri yazarken {} içerisine de yazabiliriz. Okuma açısından kolaylık sağlar
$mesaj5 = "My name's {$ad} {$soyad} and im living in {$sehir}";
echo $mesaj5."<br>";

#parçalı olarak da string birleştirme ile yazabiliriz.
$mesaj6 = "My name's ".$ad." ".$soyad." and im living in Doğukan ".$sehir;
echo $mesaj6;
echo "<br>";

echo $mesaj6[4]."<br>"; #$mesaj6 değişkeninin 4. indisini yani 5. değerini yazdırabiliriz. -> a
echo $mesaj6[5]."<br>"; #$mesaj6 değişkeninin 5. indisini yani 6. değerini yazdırabiliriz. -> m

#strlen -> Toplam karakter sayısını verir
echo strlen($mesaj6); #$mesaj6 adlı değişkenin toplam karakter sayısını yazdırabiliriz.
echo "<br>";
$mesaj7 = "abc";
echo strlen($mesaj7)."<br>";

#str_word_count -> Toplam kelime sayısını verir
echo str_word_count($mesaj6)."<br>";
$mesaj8 = "kelime1 kelime2 kelime3 kelime4 kelime5 kelime6 kelime7 kelime8 kelime9";
echo str_Word_count($mesaj8)."<br>";

#string ifadedeki bütün harfleri büyük harfe ve küçük harfe çevirebiliriz
$mesaj9 = "aBC def QWe rty qwe opr. asd ewq";
$mesaj10 = "ABC DEF abc DEF qwe ASDG";
echo strtoupper($mesaj9)."<br>";           #Stringi tamamen büyük harfe çevirir
echo strtolower($mesaj10)."<br>";   #Stringi tamamen küçük harfe çevirir
echo ucfirst($mesaj9)."<br>";       #Stringin sadece ilk harfini büyük harfe çevirir.
echo str_replace("Doğukan", "Dora", $mesaj6)."<br>";    #"Doğukan" gördüğü yere "Dora" yazar
echo str_replace(["Doğukan", "İzmir"], ["Dora", "Konak"], $mesaj6)."<br>";  #Doğukan yerine Dora, İzmir yerine Konak yazar.
echo strrev($mesaj6)."<br>";        #$mesaj6 stringini tersten yazar
?>