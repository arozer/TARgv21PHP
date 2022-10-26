<?php
require_once('conf.php');
global $yhendus;
// tabeli näitamine
$kask=$yhendus->prepare("SELECT id, nimi, perekonnanimi, telefon,pilt FROM osalejad");
$kask->bind_result($id, $nimi, $perekonnanimi,$telefon,$pilt);
$kask->execute();
?>
<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>matka osalejate andmed tabelist</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
<h1>matka osalejate andmed</h1>

<table>
    <tr>
        <th>id</th>
        <th>nimi</th>
        <th>perekonnanimi</th>
        <th>telefon</th>
        <th>pilt</th>
    </tr>
    <?php
    while($kask->fetch())
    {
        echo "<tr>";
        echo "<td>".htmlspecialchars($id)."</td>";
        echo "<td>".htmlspecialchars($nimi)."</td>";
        echo "<td>".htmlspecialchars($perekonnanimi)."</td>";
        echo "<td>".htmlspecialchars($telefon)."</td>";
        echo "<td> <image src='$pilt' alt='ilus pilt'></image></td>";
        echo "</tr>";
    }
    ?>

</table>
</body>
<?php
$yhendus->close();
?>
</html>
