<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//fopen komutu dosya veya url açar. Yanına alacağı parametre ile işlevi belirtilir
//fopen("istiklal.txt", "r");  -> İfadesi Salt okunur anlamına gelir. Dosyanın başından başlar. Dosya yoksa FALSE değerini döndürür.
//fopen("istiklal.txt", "r+"); -> İfadesi Okuma/Yazma işlevini temsil eder. Dosyanın başından başlar. Dosya yoksa FALSE değerini döndürür.
//fopen("istiklal.txt", "w");  -> İfadesi yalnızca yazma işlevini temsil eder. Dosya içeriğini açar ve temizler. Belirtilen dosya yoksa oluşturur.
//fopen("istiklal.txt", "w+"); -> İfadesi Okuma/Yazma işlevini temsil eder. Dosya içeriğini açar ve temizler. Belirtilen dosya yoksa oluşturur.
//fopen("istiklal.txt", "a");  -> İfadesi yazma işlevini temsil eder. Açılır ve dosyanın sonuna yazar. Belirtilen dosya yoksa oluşturur
//fopen("istiklal.txt", "a+"); -> İfadesi Okuma/Yazma işlevini temsil eder. Dosyanın sonuna yazarak içeriği korur.
//fopen("istiklal.txt", "x");  -> İfadesi Yazma işlevini temsil eder. Yeni bir dosya oluşturur ve bu isimde dosya zaten varsa FALSE değerini döndürür.
//fopen("istiklal.txt", "x+"); -> İfadesi Okuma/Yazma işlevini temsil eder. Yeni bir dosya oluşturur ve bu isimde dosya zaten varsa FALSE değerini döndürür.
$dosyaoku=fopen("istiklal.txt", "r");
while(! feof($dosyaoku))
{
    $satir=fgets($dosyaoku, 1024);
    @$line=explode(" ", $satir);
    for($j=0;$j<count($line);$j++){
        if($line[$j]=="milletimindir")
        echo "<font style='color:blue;font-family:times new roman;font-size:40px;'>
        <b>$line[$j] </b></font>";
        elseif($line[$j]=="hür")
        echo "<font style='color:cyan;font-family:times new roman;font-size:40px;'>
        <b>$line[$j] </b></font>";
        else
        echo "<font style='color:black;font-family:times new roman;font-size:40px;'>
        $line[$j] ";
    }
    echo "<br>";
}
fclose($dosyaoku);
?>
</body>
</html>