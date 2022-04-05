<?php

#Sabitler veri saklamak için kullanılır ancak atanan değer sonradan değiştirilemez
#Değişkenlerde saklanan değerler sonradan değiştirilebilir.
#define metodu ile tanımlanır. Tanımlama yaparken $ işareti eklemeyiz ve BÜYÜK-KÜÇÜK harf duyarlıdır
#define yerine const da kullanılabilir.
define("baglanti", "sqlserverbaglanti");
define("username", "dogukan52");
const password = "dogukan35";
echo baglanti."<br>";           #Ekrana baglanti sabitinin taşıdığı değer yazılır. sqlserverbaglanti çıktısını verir.
#baglanti = "mssql";        -> Bu ifade hataya sebep olur. Tanımlanmış sabit değer sonradan değiştirilemez
echo "Kullanıcı Adı : ".username."<br>";    #Ekrana Kullanıcı adı : dogukan52 yazar
echo "Şifre : ".password."<br>";            #Ekrana Şifre : dogukan35 yazar
?>