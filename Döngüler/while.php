<?php

$x = 0;
echo "<h1>While Döngüsü </h1>";
echo "<h3>While Döngüsü ile 1 ile 10 Arasındaki Tek Sayıları Yazdırma </h3>";
while ($x < 10)
{
    if ($x % 2 == 1)
    {
        echo $x."<br>";
    }
    $x += 1;
}

?>