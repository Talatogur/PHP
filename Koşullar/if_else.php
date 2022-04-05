<?php

echo "<h1>Koşul Durumları / İf-Else</h1>";

echo "<h3>if(5>3)</h3>";
if (5 > 3)                      #5, 3'ten büyükse alttaki kodları çalıştır
{
    echo "Koşul Doğru <br>";
    echo "Koşul Doğru <br>";
    echo "Koşul Doğru <br>";
}

echo "<h3>if(true)</h3>";
if (true)                       #true alttaki kodları çalıştırır
{
    echo "Koşul Doğru <br>";
    echo "Koşul Doğru <br>";
    echo "Koşul Doğru <br>";
}

echo "<h3>if(false)</h3>";
if (false)                      #false alttaki kodları çalıştırmaz
{
    echo "Koşul Doğru <br>";
    echo "Koşul Doğru <br>";
    echo "Koşul Doğru <br>";
}

echo "<h3>if(5<3)</h3>";
if (5 < 3)                      #5, 3'ten küçükse alttaki kodları çalıştır, küçük değilse çalışmaz
{
    echo "Koşul Doğru <br>";
    echo "Koşul Doğru <br>";
    echo "Koşul Doğru <br>";
}

echo "<h3>if(\$isLoggedin == false)</h3>";
$isLoggedin = true;
if ($isLoggedin == false)
{
    echo "Koşul Doğru <br>";
    echo "Koşul Doğru <br>";
    echo "Koşul Doğru <br>";
}

echo "<h3>Username and Password Doğru İse</h3>";
$username = "dogukantekin";
$password = "1234";
if ($username == "dogukantekin" and $password == "1234")
{
    echo "Kullanıcı adı ve şifre doğru. <br>";
}
else
{
    echo "Kullanıcı adı veya şifre yanlış. <br>";
}

if ($username == "dogukantekin")
{
    if ($password == "1234")
    {
        echo "Kullanıcı adı ve şifre doğru. <br>";
    }
    else
    {
        echo "Şifre Yanlış <br>";
    }
}
else
{
    echo "Kullanıcı Adı Yanlış <br>";
}
?>