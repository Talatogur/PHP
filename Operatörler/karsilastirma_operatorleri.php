<?php

/*
    ==      Equal                   $x == $y
    ===     Identical               $x === $y
    !=      Not equal               $x != $y
    <>      Not equal               $x <> $y
    !==     Not identical           $x !== $y
    >       Greater Then            $x > $y
    <       Less Then               $x < $y
    >=      Greater or Equal        $x >= $y
    <=      Less or Equal           $x <= $y
    <=>     Spaceship               $x <=> $y
*/

echo "<h3>== Operatörü</h3>";
echo "<p>İfadelerin eşit olup olmadığını kontrol eder. Türleriyle ilgilenmez.</p>";
$sonuc = (5 == 5);        #Boolean değer döner. İfade doğru olduğu için True olur
echo "<p>5 == 5 <b>True</b></p>";
echo var_dump($sonuc);
$sonuc = (5 == "5");
echo "<p>5 == \"5\" <b>True</b></p>";
echo var_dump($sonuc);
$sonuc = (5 == "a");
echo "<p>5 == \"a\" <b>False</b></p>";
echo var_dump($sonuc);
$sonuc = (5 == 7);
echo "<p>5 == 7 <b>False</b></p>";
echo var_dump($sonuc);


echo "<h3>!= Operatörü</h3>";
echo "<p>İfadelerin eşit olup olmadıklarını kontrol eder. Türleriyle ilgilenmez. == ifadesinin ters değerini döndürür. 
Eğer değerler eşitse False, eşit değilse True değer döndürür</p>";
$sonuc = (5 != 5);
echo "<p>5 != 5 <b>False</b></p>";
echo var_dump($sonuc);
$sonuc = (5 != "5");
echo "<p>5 != \"5\" <b>False</b></p>";
echo var_dump($sonuc);
$sonuc = (5 != "a");
echo "<p>5 != \"a\" <b>True</b></p>";
echo var_dump($sonuc);
$sonuc = (5 != 7);
echo "<p>5 != 7 <b>True</b></p>";
echo var_dump($sonuc);


echo "<h3>=== Operatörü</h3>";
echo "<p>İfadelerin eşit olup olmadıklarına ve eşitlerse türlerinin aynı olup olmadıklarını kontrol eder.
İlk ifadede türler ve değerler eşit olduğu için True döndürür. İkinci ifadede değerler eşit ama türler farklı olduğu için False döndürür</p>";
$sonuc = (5 === 5);
echo "<p>5 === 5 <b>True</b></p>";
echo var_dump($sonuc);
$sonuc = (5 === "5");
echo "<p>5 === \"5\" <b>False</b></p>";
echo var_dump($sonuc);
$sonuc = (5 === "a");
echo "<p>5 === \"a\" <b>False</b></p>";
echo var_dump($sonuc);
$sonuc = (5 === 7);
echo "<p>5 === 7 <b>False</b></p>";
echo var_dump($sonuc);


echo "<h3>!== Operatörü</h3>";
echo "<p>İfadelerin tür ve değer olarak eşit olup olmadıklarını kontrol eder. Eğer değerler eşitse False, eşit değillerse True değer döndürür.</p>";
$sonuc = (5 !== 5);
echo "<p>5 !== 5 <b>False</b></p>";
echo var_dump($sonuc);
$sonuc = (5 !== "5");
echo "<p>5 !== \"5\" <b>True</b></p>";
echo var_dump($sonuc);
$sonuc = (5 !== "a");
echo "<p>5 !== \"a\" <b>True</b></p>";
echo var_dump($sonuc);
$sonuc = (5 !== 7);
echo "<p>5 !== 7 <b>True</b></p>";
echo var_dump($sonuc);


echo "<h3><> Operatörü</h3>";
echo "<p>İfadelerin değer olarak birbirleriyle eşit olup olmadığını kontrol eder. Eşitse False, eşit değilse True değer döndürür</p>";
$sonuc = (5 <> 5);
echo "<p>5 <> 5 <b>False</b></p>";
echo var_dump($sonuc);
$sonuc = (5 <> "5");
echo "<p>5 <> \"5\" <b>False</b></p>";
echo var_dump($sonuc);
$sonuc = (5 <> "a");
echo "<p>5 <> \"a\" <b>True</b></p>";
echo var_dump($sonuc);
$sonuc = (5 <> 7);
echo "<p>5 <> 7 <b>True</b></p>";
echo var_dump($sonuc);


echo "<h3>> Operatörü</h3>";
echo "<p>İfadelerin birbirlerinden büyük veya küçük olma durumunu kontrol eder. Başa yazılan büyükse True, büyük değilse False değer döndürür.</p>";
$sonuc = (5 > 7);
echo "<p>5 > 7 <b>False</b></p>";
echo var_dump($sonuc);
$sonuc = (5 > "5");
echo "<p>5 > \"5\" <b>False</b></p>";
echo var_dump($sonuc);
$sonuc = (5 > "a");
echo "<p>5 > \"a\" <b>False</b></p>";
echo var_dump($sonuc);
$sonuc = (5 > 3);
echo "<p>5 > 3 <b>True</b></p>";
echo var_dump($sonuc);


echo "<h3>< Operatörü</h3>";
echo "<p>İfadelerin birbirlerinden büyük veya küçük olma durumunu kontrol eder.</p>";
$sonuc = (5 < 7);
echo "<p>5 < 7 <b>True</b></p>";
echo var_dump($sonuc);
$sonuc = (5 < "3");
echo "<p>5 < \"3\" <b>False</b></p>";
echo var_dump($sonuc);
$sonuc = (5 < "a");
echo "<p>5 < \"a\" <b>False</b></p>";
echo var_dump($sonuc);
$sonuc = (5 < 0.4);
echo "<p>5 < 0.4 <b>False</b></p>";
echo var_dump($sonuc);

echo "<h3><= Operatörü</h3>";
echo "<p>İfadelerin birbirlerinden büyük veya küçük olma durumunu kontrol eder.< kontrolünden farklı olarak eşitlik durumunda da True değer döndürür</p>";
$sonuc = (5 <= 7);
echo "<p>5 <= 7 <b>True</b></p>";
echo var_dump($sonuc);
$sonuc = (5 <= "3");
echo "<p>5 <= \"3\" <b>False</b></p>";
echo var_dump($sonuc);
$sonuc = (5 <= "a");
echo "<p>5 <= \"a\" <b>False</b></p>";
echo var_dump($sonuc);
$sonuc = (5 <= 5);
echo "<p>5 <= 5 <b>True</b></p>";
echo var_dump($sonuc);

echo "<h3>>= Operatörü</h3>";
echo "<p>İfadelerin birbirlerinden büyük veya küçük olma durumunu kontrol eder.> kontrolünden farklı olarak eşitlik durumunda da True değer döndürür</p>";
$sonuc = (5 >= 7);
echo "<p>5 >= 7 <b>False</b></p>";
echo var_dump($sonuc);
$sonuc = (5 >= "5");
echo "<p>5 >= \"5\" <b>True</b></p>";
echo var_dump($sonuc);
$sonuc = (5 >= 3);
echo "<p>5 >= 3 <b>True</b></p>";
echo var_dump($sonuc);

echo "<h3><=> Operatörü</h3>";
echo "<p>İfadelerin büyük, küçük ve eşit olma durumlarını kontrol eder.</p>
Başa yazılan ifade büyükse 1 değerini döndürür</p>
Başa yazılan ifade küçükse -1 değerini döndürür</p>
İfadeler eşitse 0 değerini döndürür</p>";
$sonuc = (5 <=> 7);
echo $sonuc."<br>";
$sonuc = (10<=> 8);
echo $sonuc."<br>";
$sonuc = (3 <=> 3);
echo $sonuc."<br>";
?>