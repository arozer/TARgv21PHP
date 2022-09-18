<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>405,10x10 korrutustabel läbi FOR.</title>
</head>
<body>
<p>Genereeri kahe FOR tsükkliga 10x10 korrutustabel.
    Korrutustabel peab olema HTML tabeli sees.
    Korrutustabelis peab olema esimesel real ja veerul numbrid 1-10.
    Teisel real esimese rea ja veeru korrustis jne.

</p>
<?php

echo "<table border=2>";
for ($i = 1; $i <= 10; $i++)
{
    echo "<tr>";

    for ($j = 1; $j <= 10; $j++)
    {
        $multiplier = $i * $j;
        echo "<td>$multiplier</td>";
    }

    echo "</tr>";
}
echo "</table>";

?>
</body>
</html>
