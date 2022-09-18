<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>403/ Massiv + tsükkel</title>
</head>

<body>
<p>Lisa massiivi 15 HTML erinevat värvi.
    Leia ilusad värvi nimed siit: http://www.w3schools.com/colors/colors_names.asp
    Kuva tsükliga välja värvuste nimed ja värvi need sama värvi nt.
    < span style='color: cyan' > cyan - sinine taevas < /span >

</p>

<?php
    $color=array("AliceBlue","AntiqueWhite","Aqua","Aquamarine","Azure","Blue","Brown","Coral","Gold","LawnGreen","Magenta","Red","Yellow","Snow","RoyalBlue");

    for ($i = 0; $i < 15; $i++)
    {
        echo "<strong><span style='color: $color[$i]' >$color[$i] </span ></strong>";
        echo "</br>";
    }
?>
</body>

</html>
