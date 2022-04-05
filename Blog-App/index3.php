<?php
$kategoriler = array("Macera", "Dram", "Komedi", "Korku");
$filmler = array(
    "film_1"=>array(
        "baslik"=>"Paper Lives",
        "aciklama"=>"Kağıt toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)",
        "resim"=>"1.jpeg",
        "yorumSayisi"=>"23",
        "begeniSayisi"=>"106",
        "vizyon"=>"Vizyonda",
        "url"=>strtolower(str_replace(" ", "-", "Paper Lives"))
    ),
    "film_2"=>array(
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
                </ul>
            </div>
            <div class="col-9">

                <h1 class="mb-3"><?php echo baslik ?></h1> <!-- Başlık oluşturma -->
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-3">
                            <?php echo "<img class='img-fluid' src='img/".$filmler["film_1"]["resim"]."'>" ?>
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo "<a href=\"{$filmler["film_1"]["url"]}\">{$filmler["film_1"]["baslik"]}</a>" ?></h5> 
                                <p class="card-text"><?php echo ucfirst(strtolower(substr($filmler["film_1"]["aciklama"], 0, 150)))."..."; ?></p>
                                <div>
                                    <span class="badge bg-primary"><?php echo $filmler["film_1"]["yorumSayisi"] ?></span>
                                    <span class="badge bg-primary"><?php echo $filmler["film_1"]["begeniSayisi"] ?></span>
                                    <span class="badge bg-warning"><?php echo $filmler["film_1"]["vizyon"] ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="row">
                        <div class="col-3">
                            <?php #echo "<img class=\"img-fluid\" src=\"img/{$film2_resim}\">" ?>
                            <?php echo "<img class='img-fluid' src='img/".$filmler["film_2"]["resim"]."'>" ?>
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo "<a href=\"{$filmler["film_2"]["url"]}\">{$filmler["film_2"]["baslik"]}</a>" ?></h5> 
                                <p class="card-text"><?php echo ucfirst(strtolower(substr($filmler["film_2"]["aciklama"], 0, 150)))."..."; ?></p>
                                <!-- Eğer php içerisine sona ; koyarsam UTF-8 çalışmıyor. ; koymayınca sayfa Türkçe karakter kabul ediyor. -->
                                <div>
                                    <span class="badge bg-primary"><?php echo $filmler["film_2"]["yorumSayisi"] ?></span>
                                    <span class="badge bg-primary"><?php echo $filmler["film_2"]["begeniSayisi"] ?></span>
                                    <span class="badge bg-warning"><?php echo $filmler["film_2"]["vizyon"] ?></span>
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