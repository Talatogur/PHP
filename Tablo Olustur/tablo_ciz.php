<table border="1" bgcolor=white align=center>

<?php
$sat = $_POST["satir"];
$sut = $_POST["sutun"];
$satbir = $_POST["satbir"];
$sutbir = $_POST["sutbir"];
$sayac = 0;
for ($i=1; $i<=$sat; $i++)
{
    echo "<tr>";
    for ($j=1; $j<=$sut; $j++)
    {
        if ($j==$sutbir and $sayac==0)
        {
            echo "<td rowspan=".$sat.">$j. Sütun Birleştirildi</td>";
            $sayac += 1;
        }
        if ($i==$satbir and $sayac==1)
        {
            echo "<td colspan=".$sat.">$i. Satır Birleştirildi</td>";
            $sayac += 1;
        }
        if($j!=$sutbir and $i!=$satbir)
        {
            echo "<td>$i - $j</td>";
        }
    }
    echo "</tr>";
} ?>
</table>