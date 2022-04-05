<html>
    <head>
        <style>
            table
            {
                font-family : 'Times New Roman', Times, serif;
                font-size : 20px;
            }
        </style>
        <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
    </head>
    <body>
        <table border='1'>
            <tr>
                <td colspan='2'>Eklenen Koordinatlar</td>
            </tr>
            <tr>
                <td>X Koordinatı</td>
                <td>Y Koordinatı</td>
            </tr>
            <tr>
                <td><div id='x'></div></td>
                <td><div id='y'></div></td>
            </tr>
        </table>
    <script>
        window.onclick=function(fare)
        {
        var xpos=fare.clientX;
        var ypos=fare.clientY;
        document.getElementById('x').innerHTML=xpos;
        document.getElementById('y').innerHTML=ypos;
        $.ajax({
            url:'http://localhost/Murat%20Hoca/Harita/ekle.php',
            type:'POST',
            data:'x='+xpos+"&y="+ypos
        })
        }
    </script>
    </body>
</html>