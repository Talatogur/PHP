<!-- PHP KODLARI -->
<?php
$kategoriler = array("Macera", "Dram", "Komedi", "Korku", "Bilim Kurgu");
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
    ),
    "3"=>array(
        "baslik"=>"Prison Break",
        "aciklama"=>"Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.",
        "resim"=>"3.jpeg",
        "yorumSayisi"=>"236",
        "begeniSayisi"=>"0",
        "vizyon"=>false,            #5'te değişti
        "url"=>strtolower(str_replace(" ", "-", "Walking Dead"))
    ),
    "4"=>array(
        "baslik"=>"Yeni Film 4",
        "aciklama"=>"Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.",
        "resim"=>"1.jpeg",
        "yorumSayisi"=>"0",
        "begeniSayisi"=>"1023",
        "vizyon"=>false,            #5'te değişti
        "url"=>strtolower(str_replace(" ", "-", "Walking Dead"))
    )
);
const baslik="Popüler Filmler";     #Başlık tanımlama
const limit = 100;                  #5'te değişti
?>
<!-- HTML KODLARI -->
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
                    <!-- 6'da Değişti -->
                    <!-- tek tek oluşturduğumuz kategoriler bölümünü for döngüsü içinde oluşturduk -->
                    <?php
                    for ($i = 0; $i < count($kategoriler); $i++)
                    {
                        echo "<li class=\"list-group-item\">".$kategoriler[$i]."</li>";
                    }
                    ?>
                </ul>
            </div>
            <div class="col-9">

                <h1 class="mb-3"> <!-- Başlık oluşturma -->
                    <?php echo baslik."<br>" ?>                 
                </h1> 

                <p class="text-muted"><?php echo count($kategoriler)." Kategoride ".count($filmler)." film sıralanmıştır" ?></p>
                
                <!-- 6'da değişti -->
                <!-- filmleri döngüyle yazdırdık -->

                <?php
                foreach ($filmler as $id => $film)
                {                
                echo '<div class="card mb-3">
                    <div class="row">
                        <div class="col-3">
                            <img class="img-fluid" src="img/'.$film["resim"].'">                            
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title"><a href=\"'.$film["url"].'\">'.$film["baslik"].'</a></h5> 
                                <p class="card-text">';                                    
                                        if (strlen($film["aciklama"]) > limit)
                                        {
                                            echo substr($film["aciklama"], 0, limit)."...";
                                        }
                                        else
                                        {
                                            echo $film["aciklama"];
                                        };            
                                echo '</p>
                                <div>';                                    
                                    if ($film["yorumSayisi"] > 0)
                                    {
                                        echo "<span class=\"badge bg-primary me-2\">".$film["yorumSayisi"]."</span>";
                                    };
                                
                                    if ($film["begeniSayisi"] > 0)
                                    {
                                        echo "<span class=\"badge bg-primary me-2\">".$film["begeniSayisi"]."</span>";
                                    };                                                                                    
                                echo '<span class="badge bg-warning">';                                        
                                            if ($film["vizyon"] == true)
                                            {
                                                echo "Vizyonda";
                                            } 
                                            else
                                            {
                                                echo "Vizyonda Değil";
                                            };                                        
                                echo '</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
                }
                ?>

                
            </div>
        </div>
    </div>
    
</body>
</html>