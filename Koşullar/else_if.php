<?php

$username = "dogukantekin";
$password = "1234";

if ($username != "dogukantekin")
{
    echo "Kullanıcı Adı Yanlış <br>";
}
elseif ($password != "1234")
{
    echo "Şifre Yanlış <br>";
}
else
{
    echo "Giriş Başarılı <br>";
}

$saat = 9.44;
if ($saat < 10)
{
    echo "Günaydın <br>";
}
elseif ($saat < 18)
{
    echo "İyi Günler <br>";
}
else
{
    echo "İyi Akşamlar <br>";
}
?>