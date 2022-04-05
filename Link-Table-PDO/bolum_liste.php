<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hafta 6</title>
</head>
<body>
    <table border=0 cellpadding=8 cellspacing=4 align=center>

    <?php

    error_reporting(0);
    $kod = $_GET["kod"];
    $db = new PDO ("mysql:host=localhost;dbname=turizm;charset=utf8", "root", "");
    foreach ($db->query("SELECT * FROM bolge where i_id = $kod", PDO::FETCH_ASSOC) as $row)
    {
        echo "<tr><td align=center>".$row["b_ad"]."</td></tr>";
        echo "</table>";
        echo "<a href='birim_liste.php'>Ana Sayfa</a>";
    }

    ?>
    
</body>
</html>