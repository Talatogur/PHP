<html>
    <head>
        <style>
            table
            {
                font-family : 'Times New Roman', Times, serif;
                font-size : 20px;
            }
        </style>
    </head>
    <body>

    <?php
    echo "<table border=0 cellspacing=1 cellpadding=1 align=center>";
    error_reporting(0);
    $db = new PDO ("mysql:host=localhost;dbname=hafta5;charset=utf8", "root", "");
    $query = $db -> query ("SELECT * FROM veriler2", PDO::FETCH_ASSOC);
    $query2 = $db -> query ("SELECT * FROM veriler2", PDO::FETCH_ASSOC);
    #Birinci olarak bunu yaptık!!!
    // foreach ($query as $row)
    // {        
    //     echo "<td valign=bottom>".$row["maas"]."<br><img src='bar.jpg' width=50 height=".$row["maas"]."><br>".$row["ad"]."</td>";
    //     echo "<td valign=bottom>".$row["yas"]."<br><img src='bar_1.jpg' width=50 height=".$row["yas"]."><br>".$row["ad"]."</td>";
    // }
    echo "<br><br>";
    #İkinci olarak bunu yaptık!!!
    foreach ($query as $row)
    {        
        echo "<td valign=bottom>".$row["maas"]."<br><img src='bar.jpg' width=50 height=".$row["maas"]."></td>";
        echo "<td valign=bottom>".$row["yas"]."<br><img src='bar_1.jpg' width=50 height=".$row["yas"]."></td>";
    }
    echo "<td valign='top'><img src='bar.jpg' width=20 height=20>Maaş<br><img src='bar_1.jpg' width=20 height=20>Yaş</td>";
    echo "<tr>";
    foreach ($query2 as $satir)
    {
        echo "<td colspan='2' style=text-align:center>".$satir["ad"]."</td>";
    }    

    

    #Vize-Final-Ortalama olarak tablo oluşturma
    $db2 = new PDO ("mysql:host=localhost;dbname=hafta5;charset=utf8", "root", "");
    $query3 = $db -> query ("SELECT * FROM ortalama", PDO::FETCH_ASSOC);
    $query4 = $db -> query ("SELECT * FROM ortalama", PDO::FETCH_ASSOC);
    $query5 = $db -> query ("SELECT * FROM ortalama", PDO::FETCH_ASSOC);
    echo "<table border=0 cellspacing=1 cellpadding=1 align=center>";
    foreach ($query3 as $row)
    {        
        echo "<td valign=bottom>".$row["vize"]."<br><img src='bar.jpg' width=50 height=".$row["vize"]."></td>";
        echo "<td valign=bottom>".$row["final"]."<br><img src='bar_1.jpg' width=50 height=".$row["final"]."></td>";
    }
    echo "<td valign='top'><img src='bar.jpg' width=20 height=20>Vize<br><img src='bar_1.jpg' width=20 height=20>Final</td>";
    echo "<tr>";
    foreach ($query4 as $satir)
    {
        echo "<td colspan='2' style=text-align:center>".$satir["ad"]."</td>";        
    }    
    echo "<tr>";
    foreach ($query5 as $satir)
    {
        echo "<td colspan='2' style=text-align:center>".$satir["ortalama"]."</td>";
    }
    echo "</table>";
    ?>
    </body>
</html>