<?php

echo "<h3>Break For</h3>";
$mesaj = "Hello World";
for ($i = 0; $i < strlen($mesaj); $i++)
{
    if ($i == 4)    # $i değişkeni 4e eşit olduğunda döngüyü sonlandırır. Kalan harfleri yazmaz
    {
        break;
    }
    echo $mesaj[$i]."<br>";
}

echo "<h3>Continue For</h3>";
for ($i = 0; $i < strlen($mesaj); $i++)
{
    if ($i == 4)    # $i değişkeni 4e eşit olduğunda döngünün o turunu kodları çalıştırmadan sonlandırır ve bir sonraki $i değeri için işleme devam eder
    {
        continue;
    }
    echo $mesaj[$i]."<br>";
}

echo "<h3>Break While</h3>";
$i = 0;
while ($i < 5)
{
    if ($i == 3)
    {
        break;
    }
    echo $i."<br>";
    $i++;
}

echo "<h3>Continue While</h3>";
$i = 0;
while ($i < 5)
{
    if ($i == 2)
    {
        $i++;
        continue;        
    }
    echo $i."<br>";
    $i++;
}

#1 ile 100 arasındaki tek sayıların toplamını break/continue kullanarak yazdırın
?>