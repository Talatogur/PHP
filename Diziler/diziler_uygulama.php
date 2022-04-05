<?php

/* 
1-Ürünleri numeric dizide saklayınız ve ürün fiyatlarının ortalamasını hesaplayınız
    IPhone11 = 7000
    IPhone 12 = 9000
    Samsung S20 = 8000
2-Aşağıdaki oyuncu bilgilerini "players" isimli dizide saklayınız
    player 1 :
        nickname = ronaldo
        name = Cristiano Ronaldo
        yearOfBirth = 1985
        nationality = Portugal
        currentTeam = Portugal
        history = Juventus, Real Madrid, Portugal
    player 2 :
        nickname = messi
        name = Lionel Messi
        yearOfBirth = 1987
        nationality = Argentina
        current_team => Barcelona,
        history      => Barcelona,Argentina,Portugal
*/

echo "<h3>Soru 1</h3>";
$urunler = array(
    array("IPhone 11", 7000),
    array("IPhone 12", 9000),
    array("Samsung S20", 8000)
);
#urun adı = urunler00, urun fiyatı = urunler01
#urun adı = urunler10, urun fiyatı = urunler11
#urun adı = urunler20, urun fiyatı = urunler21
#urunlerin ortalaması = urunler01 + urunler11 + urunler21 / 3 
$ortalamaFiyat = 0;
for($i=0; $i<3; $i++)
{
    echo "<strong>Ürün Adı : </strong>".$urunler[$i][0]."<strong> Ürün Fiyatı : </strong>".$urunler[$i][1]."<br>";
    $ortalamaFiyat += $urunler[$i][1];
}
echo "<strong>Ortalama Fiyat : </strong>".($ortalamaFiyat/3)."<br>";

echo "<h3>Soru 2</h3>";
$players = array(
    "player 1"=>array(
        "nickname"=>"ronaldo",
        "name"=>"Cristiano Ronaldo",
        "yearOfBirth"=>"1985",
        "nationality"=>"Portugal",
        "currentTeam"=>"Manchester United FC",
        "history"=>array("Juventus", "Real Madrid", "Portugal")
    ),
    "player 2"=>array(
        "nickname"=>"messi",
        "name"=>"Lionel Messi",
        "yearOfBirth"=>"1987",
        "nationality"=>"Argentina",
        "currentTeam"=>"Barcelona",
        "history"=>array("Barcelona", "Argentina", "PSG")
    )
);
echo "<h4>1. Oyuncu</h4>";
echo "<strong>Takma Ad : </strong>".$players["player 1"]["nickname"]."<br>";
echo "<strong>Ad : </strong>".$players["player 1"]["name"]."<br>";
echo "<strong>Doğum Yılı : </strong>".$players["player 1"]["yearOfBirth"]."<br>";
echo "<strong>Milliyet : </strong>".$players["player 1"]["nationality"]."<br>";
echo "<strong>Oynadığı Takım : </strong>".$players["player 1"]["currentTeam"]."<br>";
echo "<strong>Geçmiş Takımlar : </strong>".$players["player 1"]["history"][0]." - ".$players["player 1"]["history"][1]." - ".$players["player 1"]["history"][2]."<br>";

echo "<h4>2. Oyuncu</h4>";
echo "<strong>Takma Ad : </strong>".$players["player 2"]["nickname"]."<br>";
echo "<strong>Ad : </strong>".$players["player 2"]["name"]."<br>";
echo "<strong>Doğum Yılı : </strong>".$players["player 2"]["yearOfBirth"]."<br>";
echo "<strong>Milliyet : </strong>".$players["player 2"]["nationality"]."<br>";
echo "<strong>Oynadığı Takım : </strong>".$players["player 2"]["currentTeam"]."<br>";
echo "<strong>Geçmiş Takımlar : </strong>".$players["player 2"]["history"][0]." - ".$players["player 2"]["history"][1]." - ".$players["player 2"]["history"][2]."<br>";

#print_r ile dizinin elemanlarını yazdırabiliriz
echo "<h3>print_r komutu</h3>";
print_r($players);                              #$players dizisindeki bütün bilgileri yazar
echo "<br><br>";
print_r($players["player 1"]);                  #player 1 ' e ait bütün bilgileri yazar
echo "<br>";
print_r($players["player 2"]);                  #player 2 ' ye ait bütün bilgileri yazar
echo "<br>";
print_r($players["player 1"]["name"]);          #player 1 ' e ait name bilgisini yazar
echo "<br>";    
print_r($players["player 2"]["name"]);          #player 2 ' ye ait name bilgisini yazar
echo "<br>";
print_r($players["player 1"]["history"][0]);    #player 1 'in geçmiş takımlarından ilkini ekrana yazdırır
?>