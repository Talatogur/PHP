<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
    <style>
        table
        {
            font-family: "Times New Roman";
            font-size : 25px;
        }
    </style>
</head>
<body>
    <?php

    echo "<table border=0 cellspacing=10 cellpadding=1 align=center><tr>";
    error_reporting(0);
    $db = new PDO("mysql:host=localhost;dbname=buca;charset=utf8", "root", "");
    $query = $db->query("select * from bil ", PDO::FETCH_ASSOC);
    foreach ($query as $row)
    {
        echo "<td valign=bottom>".$row["maas"]."<br><img src='grafik.jpg' width=75 height=".$row["maas"]."><br>".$row["ad"]."</td>";
        #valign=bottom ifadesi aşağıdan hizalama yapar
    }

    ?>
    </table>
</body>
</html>