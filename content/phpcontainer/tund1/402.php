<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>tsükl</title>
</head>
<body>
    <p>tee tsükliga 20 "checkboxi"
        Pane neile kõigile oma nimi stiilis box[1], box[2], jne</p>
<?php
    $i=1;
    while($i<=20)
{
    echo "<input type='checkbox' id='$i' name='box[]' value='$i'>";
    echo "<label for='$i'>box".$i."</label>";
    echo "<br>";
    $i++;
}
?>
    <p>Tee tsükliga 20 "teksti lahtrit". Pane neile kõigile oma nimi stiilis cell[1], cell[2], jne.</p>
    <?php
    $j=1;
    while($j<=20)
    {
        echo " <label for='$j '>cell ".$j."</label> ";
        echo " <input type='text' id='$j' name='cell[]' value=''>";
        echo " <br>";
        $j++;
    }
    ?>
    <p>Tee tsükliga 20 "radio buttonit". Pane neile kõigile üks nimi "radio" ja erinevad väärtused stiilis value1, value2 jne.</p>
    <?php
    $t=1;
    while($t<=20)
    {
        echo " <label for='$t '>radio ".$t."</label> ";
        echo " <input type='radio' id='$t' name='radio[]' value=' $t'>";
        echo " <br>";
        $t++;
    }
    ?>
</body>
</html>

