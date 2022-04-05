<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birim Liste</title>
    <style>
        a
        {
            font-family : 'Times New Roman', Times, serif;
            text-decoration: none;
            color:black;
            font-size:40px;
        }
        #gr
        {
            width:50%;
            background-image: linear-gradient(red,yellow);
        }
        #gr:hover
        {
            width:50%;
            background-image: linear-gradient(blue,yellow);
        }
    </style>
</head>
<body>
    <center>

    <?php
    error_reporting(0);
    $db = new PDO("mysql:host=localhost;dbname=turizm;charset=utf8", "root", "");
    foreach ($db->query("SELECT id,ad From il", PDO::FETCH_BOTH) as $row)
    {
        echo "<div id=gr>
        <h2><a href='bolum_liste.php?kod=".$row['id'].">".$row['ad']."</a>
        </div>";
    }
    ?>
    </table>
    
</body>
</html>