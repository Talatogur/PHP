<?php

/*
    and     => Girilen ifadelerin True olmasıyla sonuç True olur. İfadelerde 1 tane bile False değer olursa False döndürür
    or      => Girilen ifadelerden 1 tanesinin True olmasıyla sonucu True döndürür
    xor     => Girilen ifadelerden sadece 1 tanesinin True olmasıyla sonuç True olur
    !       => Girilen ifadenin ters değerini alır.
*/

/*
    (yas >= 18) ve (mezuniyet == "lise" ya da mezuniyet == "üniversite")
    ve operatörü = and
    ya da operatörü = or
    (yas >= 18) and (mezuniyet == "lise" or mezuniyet == "üniversite")

    $x > 5;
    $x < 15;
    ikisini birlikte yazabilmek için
    ($x > 5) and ($x < 15) yazmalıyız

    $x = 10;
    $sonuc = ($x > 0)   -> Bu ifade True değer döndürür
    $sonuc = !($x > 0)   -> Bu ifade başındaki ünlemden dolayı False değer döndürür
*/
?>