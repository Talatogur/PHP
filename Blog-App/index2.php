<?php

$kategori1="Macera";
$kategori2="Dram";
$kategori3="Komedi";
$kategori4="Korku";

$film1_baslik="Paper Lives";
$film1_aciklama="Kağıt toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)";
$film1_resim="1.jpeg";
$film1_yorumSayisi="23";
$film1_begeniSayisi="106";
$film1_vizyon="Vizyonda";
$film1_url = strtolower(str_replace(" ", "-", $film1_baslik)); #URL 1

$film2_baslik="Walking Dead";
$film2_aciklama="Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.";
$film2_resim="2.jpeg";
$film2_yorumSayisi="236";
$film2_begeniSayisi="1023";
$film2_vizyon="Vizyonda Değil";
$film2_url = strtolower(str_replace(" ", "-", $film2_baslik)); #URL 2

const baslik="Popüler Filmler";     #Başlık tanımlama
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
                    <li class="list-group-item"><?php echo $kategori1 ?></li>
                    <li class="list-group-item"><?php echo $kategori2 ?></li>
                    <li class="list-group-item"><?php echo $kategori3 ?></li>
                    <li class="list-group-item"><?php echo $kategori4 ?></li>
                </ul>
            </div>
            <div class="col-9">

                <h1 class="mb-3"><?php echo baslik ?></h1> <!-- Başlık oluşturma -->
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-3">
                            <?php #echo "<img class=\"img-fluid\" src=\"img/{$film1_resim}\">" ?>
                            <?php echo "<img class='img-fluid' src='img/$film1_resim'>" ?>
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo "<a href=\"{$film1_url}\">{$film1_baslik}</a>" ?></h5> <!-- başlığa tıklanınca url'i açma -->
                                <!-- film1_aciklamanın ilk 150 karakterini al, küçük harf yap, ilk harfini büyük yap, sonuna ... ekle -->
                                <p class="card-text"><?php echo ucfirst(strtolower(substr($film1_aciklama, 0, 150)))."..."; ?></p>
                                <div>
                                    <span class="badge bg-primary"><?php echo $film1_yorumSayisi ?></span>
                                    <span class="badge bg-primary"><?php echo $film1_begeniSayisi ?></span>
                                    <span class="badge bg-warning"><?php echo $film1_vizyon ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="row">
                        <div class="col-3">
                            <?php #echo "<img class=\"img-fluid\" src=\"img/{$film2_resim}\">" ?>
                            <?php echo "<img class='img-fluid' src='img/$film2_resim'>" ?>
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo "<a href=\"{$film2_url}\">{$film2_baslik}</a>" ?></h5> <!-- başlığa tıklanınca url'i açma -->
                                <!-- film2_aciklamanın ilk 150 karakterini al, küçük harf yap, ilk harfini büyük yap, sonuna ... ekle -->
                                <p class="card-text"><?php echo ucfirst(strtolower(substr($film2_aciklama, 0, 150)))."..."; ?></p>
                                <!-- Eğer php içerisine sona ; koyarsam UTF-8 çalışmıyor. ; koymayınca sayfa Türkçe karakter kabul ediyor. -->
                                <div>
                                    <span class="badge bg-primary"><?php echo $film2_yorumSayisi ?></span>
                                    <span class="badge bg-primary"><?php echo $film2_begeniSayisi ?></span>
                                    <span class="badge bg-warning"><?php echo $film2_vizyon ?></span>
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