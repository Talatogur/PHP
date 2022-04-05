<?php
$metin="Dokuz Eylul Imyo Bilgisayar Bolumu";
$s=explode(" ", $metin);
echo $metin."<br>";

echo "Kelime sayisi.....".str_word_count($metin)."<br>";
echo "Cümlenin tersi....".strrev($metin)."<br>";
echo "'o' harfinin cümledeki yeri.:".strpos($metin, "z")."<br>";
echo "Cümlede kelime değişikliği..:".str_replace("Bilgisayar,", "Elektronik", $metin)."<br>";
echo "Kelime sayısı.....:".count($s)."<br>";
for($i=0;$i<count($s);$i++)
echo $i.".kelime.....: ".$s[$i]."<br>";
?>