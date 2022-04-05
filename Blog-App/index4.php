<?php

/* Yapılacaklar

    1 - kategoriler  dizisinin sonuna "Bilim Kurgu" kategorisini ekleyiniz
    2 - kategoriler dizisini alfabetik olarak sıralayınız
    3 - filmler dizisinin başına bir film ekleyiniz
    4 - filmleri rastgele sıralayınız
    5 - h1 etiketinin altına "5 kategoride 3 film listelenmiştir" yazısını dizi eleman sayılarına göre yazdırınız

*/


$kategoriler = array("Macera", "Dram", "Komedi", "Korku");
array_push($kategoriler, "Bilim Kurgu");
sort($kategoriler);
$filmler = array(
    "1"=>array(
        "baslik"=>"Paper Lives",
        "aciklama"=>"Kağıt toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)",
        "resim"=>"1.jpeg",
        "yorumSayisi"=>"23",
        "begeniSayisi"=>"106",
        "vizyon"=>"Vizyonda",
        "url"=>strtolower(str_replace(" ", "-", "Paper Lives"))
    ),
    "2"=>array(
        "baslik"=>"Walking Dead",
        "aciklama"=>"Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.",
        "resim"=>"2.jpeg",
        "yorumSayisi"=>"236",
        "begeniSayisi"=>"1023",
        "vizyon"=>"Vizyonda Değil",
        "url"=>strtolower(str_replace(" ", "-", "Walking Dead"))
    )
);
const baslik="Popüler Filmler";     #Başlık tanımlama
#Yeni Film Ekleme
$yeni_film = array(
        "baslik"=>"Prison Break",
        "aciklama"=>"Haksız yere suçlandığını düşündüğü abisini hapishaneden kurtarmak isteyen Michael Scofield, nerdeyse kusursuz bir plan yapar.Lincoln Burrows'a yüklenen suç, kendilerini temize çıkarabilecekleri bir suç değildir.",
        "resim"=>"4.jpg",
        "yorumSayisi"=>"389",
        "begeniSayisi"=>"13729",
        "vizyon"=>"Vizyonda",
        "url"=>strtolower(str_replace(" ", "-", "Prison Break"))
);
$filmler["0"] = $yeni_film;    #Filmi $filmler dizisinin içine "0" key değeri ile aktardık
shuffle($filmler);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Blog App</title>
</head>
<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-3">
                <ul class="list-group">
                    <li class="list-group-item"><?php echo $kategoriler[0] ?></li>
                    <li class="list-group-item"><?php echo $kategoriler[1] ?></li>
                    <li class="list-group-item"><?php echo $kategoriler[2] ?></li>
                    <li class="list-group-item"><?php echo $kategoriler[3] ?></li>
                    <li class="list-group-item"><?php echo $kategoriler[4] ?></li>
                </ul>
            </div>
            <div class="col-9">

                <h1 class="mb-3">
                    <?php echo baslik."<br>" ?>                 
                </h1> <!-- Başlık oluşturma -->

                <p class="text-muted"><?php echo count($kategoriler)." Kategoride ".count($filmler)." film sıralanmıştır" ?></p>
                <!-- Film 1 -->
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-3">
                            <?php echo "<img class='img-fluid' src='img/".$filmler["1"]["resim"]."'>" ?>
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo "<a href=\"{$filmler["1"]["url"]}\">{$filmler["1"]["baslik"]}</a>" ?></h5> 
                                <p class="card-text"><?php echo ucfirst(strtolower(substr($filmler["1"]["aciklama"], 0, 150)))."..."; ?></p>
                                <div>
                                    <span class="badge bg-primary"><?php echo $filmler["1"]["yorumSayisi"] ?></span>
                                    <span class="badge bg-primary"><?php echo $filmler["1"]["begeniSayisi"] ?></span>
                                    <span class="badge bg-warning"><?php echo $filmler["1"]["vizyon"] ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Film 2 -->
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-3">
                            <?php #echo "<img class=\"img-fluid\" src=\"img/{$film2_resim}\">" ?>
                            <?php echo "<img class='img-fluid' src='img/".$filmler["2"]["resim"]."'>" ?>
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo "<a href=\"{$filmler["2"]["url"]}\">{$filmler["2"]["baslik"]}</a>" ?></h5> 
                                <p class="card-text"><?php echo ucfirst(strtolower(substr($filmler["2"]["aciklama"], 0, 150)))."..."; ?></p>
                                <!-- Eğer php içerisine sona ; koyarsam UTF-8 çalışmıyor. ; koymayınca sayfa Türkçe karakter kabul ediyor. -->
                                <div>
                                    <span class="badge bg-primary"><?php echo $filmler["2"]["yorumSayisi"] ?></span>
                                    <span class="badge bg-primary"><?php echo $filmler["2"]["begeniSayisi"] ?></span>
                                    <span class="badge bg-warning"><?php echo $filmler["2"]["vizyon"] ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Film 3 -->
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-3">
                            <?php echo "<img class='img-fluid' src='img/".$filmler["0"]["resim"]."'>" ?>
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo "<a href=\"{$filmler["0"]["url"]}\">{$filmler["0"]["baslik"]}</a>" ?></h5> 
                                <p class="card-text"><?php echo ucfirst(strtolower(substr($filmler["0"]["aciklama"], 0, 150)))."..."; ?></p>
                                <div>
                                    <span class="badge bg-primary"><?php echo $filmler["0"]["yorumSayisi"] ?></span>
                                    <span class="badge bg-primary"><?php echo $filmler["0"]["begeniSayisi"] ?></span>
                                    <span class="badge bg-warning"><?php echo $filmler["0"]["vizyon"] ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
</body>
</html>