<?php

$yas = 19;
$egitim = "lise";
if ($yas >= 18)
{
    if ($egitim == "lise" or $egitim == "üniversite")
    {
        echo "Ehliyet alabilir <br>";
    }
    else
    {
        echo "Eğitim yetersiz <br>";
    }
}
else
{
    echo "Yaş tutmuyor <br>";
}

#ternary ile

// echo ($yas >= 18) ? (true):(false)
echo ($yas >= 18) ? ("Ehliyet Alabilir"):("Ehliyet Alamaz");
echo "<br>";
echo ($yas >= 18) 
    ? ($egitim == "lise" or $egitim == "üniversite") ? ("Ehliyet Alabilir"):("Eğitim Yetersiz")
    : ("Yaşınız tutmuyor")

?>