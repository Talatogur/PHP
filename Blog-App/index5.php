<?php
$kategoriler = array("Macera", "Dram", "Komedi", "Korku");
sort($kategoriler);
$filmler = array(
    "1"=>array(
        "baslik"=>"Paper Lives",
        "aciklama"=>"Kağıt toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)",
        "resim"=>"1.jpeg",
        "yorumSayisi"=>"23",
        "begeniSayisi"=>"106",
        "vizyon"=>true,             #5'te değişti
        "url"=>strtolower(str_replace(" ", "-", "Paper Lives"))
    ),
    "2"=>array(
        "baslik"=>"Walking Dead",
        "aciklama"=>"Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.",
        "resim"=>"2.jpeg",
        "yorumSayisi"=>"236",
        "begeniSayisi"=>"1023",
        "vizyon"=>false,            #5'te değişti
        "url"=>strtolower(str_replace(" ", "-", "Walking Dead"))
    )
);
const baslik="Popüler Filmler";     #Başlık tanımlama
const limit = 100;                  #5'te değişti
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
           
            <div class="col-3"> <!-- Kategoriler -->
                <ul class="list-group">
                    <li class="list-group-item"><?php echo $kategoriler[0] ?></li>
                    <li class="list-group-item"><?php echo $kategoriler[1] ?></li>
                    <li class="list-group-item"><?php echo $kategoriler[2] ?></li>
                    <li class="list-group-item"><?php echo $kategoriler[3] ?></li>
                </ul>
            </div>
            <div class="col-9">

                <h1 class="mb-3"> <!-- Başlık oluşturma -->
                    <?php echo baslik."<br>" ?>                 
                </h1> 

                <p class="text-muted"><?php echo count($kategoriler)." Kategoride ".count($filmler)." film sıralanmıştır" ?></p>
                
                <div class="card mb-3"> <!-- Film 1 -->
                    <div class="row">
                        <div class="col-3">
                            <?php echo "<img class='img-fluid' src='img/".$filmler["1"]["resim"]."'>" ?>
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo "<a href=\"{$filmler["1"]["url"]}\">{$filmler["1"]["baslik"]}</a>" ?></h5> 
                                <!-- 5'te değişti -->
                                    <!-- Eğer açıklama 100 karakterden uzunsa kısaltarak gösterecek -->
                                <p class="card-text">
                                    <?php 
                                        if (strlen($filmler["1"]["aciklama"]) > limit)
                                        {
                                            echo substr($filmler["1"]["aciklama"], 0, limit)."...";
                                        } 
                                        else
                                        {
                                            echo $filmler["1"]["aciklama"];
                                        }
                                    ?>
                                </p>
                                <div>

                                    <!-- 5'te değişti -->
                                    <!-- Eğer yorum sayısı 0'dan yüksekse sayfada görüntülenecek -->
                                    <?php
                                    if ($filmler["1"]["yorumSayisi"] > 0)
                                    {
                                        echo "<span class=\"badge bg-primary\">".$filmler["1"]["yorumSayisi"]."</span>";
                                    }                                        
                                    ?>
                    
                                    <span class="badge bg-primary"><?php echo $filmler["1"]["begeniSayisi"] ?></span>

                                    <!-- 5'te değişti -->
                                    <!-- Eğer ilgili değer true ise vizyonda, değil ise vizyonda değil yazacak -->
                                    <span class="badge bg-warning">
                                        <?php 
                                            if ($filmler["1"]["vizyon"] == true)
                                            {
                                                echo "Vizyonda";
                                            } 
                                            else
                                            {
                                                echo "Vizyonda Değil";
                                            }
                                        ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="card mb-3"> <!-- Film 2 -->
                    <div class="row">
                        <div class="col-3">
                            <?php #echo "<img class=\"img-fluid\" src=\"img/{$film2_resim}\">" ?>
                            <?php echo "<img class='img-fluid' src='img/".$filmler["2"]["resim"]."'>" ?>
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo "<a href=\"{$filmler["2"]["url"]}\">{$filmler["2"]["baslik"]}</a>" ?></h5> 
                                <p class="card-text">
                                    <!-- 5'te değişti -->
                                    <!-- Eğer açıklama 100 karakterden uzunsa kısaltarak gösterecek -->
                                    <?php 
                                        if (strlen($filmler["2"]["aciklama"]) > limit)
                                        {
                                            echo substr($filmler["2"]["aciklama"], 0, limit)."...";
                                        } 
                                        else
                                        {
                                            echo $filmler["2"]["aciklama"];
                                        }
                                    ?>
                                </p>
                                <!-- Eğer php içerisine sona ; koyarsam UTF-8 çalışmıyor. ; koymayınca sayfa Türkçe karakter kabul ediyor. -->
                                <div>
                                    <!-- 5'te değişti -->
                                    <!-- Eğer yorum sayısı 0'dan yüksekse sayfada görüntülenecek -->
                                    <?php
                                    if ($filmler["2"]["yorumSayisi"] > 0)
                                    {
                                        echo "<span class=\"badge bg-primary\">".$filmler["2"]["yorumSayisi"]."</span>";
                                    }                                        
                                    ?>
                                    <span class="badge bg-primary"><?php echo $filmler["2"]["begeniSayisi"] ?></span>
                                    <!-- 5'te değişti -->
                                    <!-- Eğer ilgili değer true ise vizyonda, değil ise vizyonda değil yazacak -->
                                    <span class="badge bg-warning">
                                        <?php 
                                            if ($filmler["2"]["vizyon"] == true)
                                            {
                                                echo "Vizyonda";
                                            } 
                                            else
                                            {
                                                echo "Vizyonda Değil";
                                            }
                                        ?>
                                    </span>
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