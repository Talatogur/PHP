<?php

echo "<h1>For Döngüsü</h1>";
echo "<h3>1 ile 100 Arasındaki Çift Sayıları Yazdırma </h3>";
for ($x = 1; $x <= 100; $x++)
{
    if ($x % 2 == 0)
    {
        echo $x."<br>";
    }
}



echo "<h3>İstenilen Aralıktaki Çift Sayıları Yazdırma </h3>";
$baslangic = 10;
$bitis = 50;
$artis = 1;
for($x = $baslangic; $x <= $bitis; $x+=$artis)
{
    if ($x % 2 == 0)
    {
        echo $x."<br>";
    }
}
?>