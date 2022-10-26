<?php
$tooted=simplexml_load_file("tooted.xml");

// otsing toode nimetuse järgi
function searchByName($query)
{
    global $tooted;
    $result=array();
    foreach ($tooted->toode as $toode) {
        if (substr(strtolower($toode->nimetus), 0,strlen($query)) ==strtolower($query)) {
            array_push($result, $toode);
        }
    }
    return $result;
}
?>

<?php

$uus_fail=(isset($_POST["uus_fail"])) && $_POST["uus_fail"];
//XML andmete salvestamine  uusBaas.xml
if(isset($_POST['submit']) && $uus_fail){
    $xmlDoc = new DOMDocument("1.0","UTF-8");
    $xmlDoc->preserveWhiteSpace = false;
    $xmlDoc->formatOutput = true;

    $xml_root = $xmlDoc->createElement("tooted");
    $xmlDoc->appendChild($xml_root);

    $xml_toode = $xmlDoc->createElement("toode");
    $xmlDoc->appendChild($xml_toode);

    $xml_root->appendChild($xml_toode);

    $xml_toode->appendChild($xmlDoc->createElement('nimi', $_POST['nimi']));
    $xml_toode->appendChild($xmlDoc->createElement('hind',$_POST['hind']));
    $xml_toode->appendChild($xmlDoc->createElement('varv',$_POST['varv']));

    $lisad=$xml_toode->appendChild($xmlDoc->createElement('lisad'));
    $lisad->appendChild($xmlDoc->createElement('material', $_POST['material']));
    $lisad->appendChild($xmlDoc->createElement('tootja', $_POST['tootja']));

    $xmlDoc->save('tooted.xml');
}


//XML andmete täiendamine
if(isset($_POST['submit']) && !$uus_fail){
    $xmlDoc = new DOMDocument("1.0","UTF-8");
    $xmlDoc->preserveWhiteSpace = false;
    $xmlDoc->load('tooted.xml');
    $xmlDoc->formatOutput = true;

    $xml_root = $xmlDoc->documentElement;
    $xmlDoc->appendChild($xml_root);

    $xml_toode = $xmlDoc->createElement("toode");
    $xmlDoc->appendChild($xml_toode);

    $xml_root->appendChild($xml_toode);

    $xml_toode->appendChild($xmlDoc->createElement('nimi', $_POST['nimi']));
    $xml_toode->appendChild($xmlDoc->createElement('hind',$_POST['hind']));
    $xml_toode->appendChild($xmlDoc->createElement('varv',$_POST['varv']));
    $lisad=$xml_toode->appendChild($xmlDoc->createElement('lisad'));
    $lisad->appendChild($xmlDoc->createElement('material', $_POST['material']));
    $lisad->appendChild($xmlDoc->createElement('tootja', $_POST['tootja']));

    $xmlDoc->save('tooted.xml');
}
$andmed=simplexml_load_file('tooted.xml');

?>

<!DOCTYPE html>
<br lang="et">
<head>
    <meta charset="UTF-8">
    <title>XML Andmete lugemine</title>
</head>
</br>
<h2>Toote sisestamine</h2>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" action="">
    <label for="nimi">Toode nimi</label>
    <input type="text" id="nimi" name="nimi">
    <br>
    <label for="hind">Toode hind</label>
    <input type="text" id="hind" name="hind">
    <br>
    <label for="varv">Toode värv</label>
    <input type="text" id="varv" name="varv">
    <br>
    <label for="material">material</label>
    <input type="text" id="material" name="material">
    <br>
    <label for="tootja">tootja nimi</label>
    <input type="text" id="tootja" name="tootja">

    <br>
    <label for="uus_fail">Loo uus fail:</label>
    <input type="checkbox" name="uus_fail" id="uus_fail" value="1">
    <br>
    <input type="submit" value="Sisesta" id="submit" name="submit">

</form>
</body>
</html>
<br>
<h3>Toodete otsing</h3>
<form action="?" method="post">
    <input type="text" id="otsing" name="otsing" placeholder="toode nimetus">
    <input type="submit" value="OK">
</form>
<strong>kõik toodete andmed</strong>
<table border="1">
    <tr>
        <th>Nimetus</th>
        <th>Hind</th>
        <th>Värv</th>
        <th>material</th>
        <th>tootja</th>
    </tr>
    <?php
    foreach ($tooted->toode as $toode) {
        echo "<tr>";
        echo "<td>".$toode->nimi."</td>";
        echo "<td>".$toode->hind."</td>";
        echo "<td>".$toode->varv."</td>";
        echo "<td>".$toode->lisad->material."</td>";
        echo "<td>".$toode->lisad->tootja."</td>";
        echo "</tr>";
    }
    ?>
</table>
</br>
<?php
if(!empty($_POST["otsing"]))
{
    $result=searchByName($_POST["otsing"]);
    foreach ($result as $toode)
    {
        echo "<li>".$toode->nimetus.", ".$toode->hind;
        echo "</li>";
    }

}
?>
</br>
<h1>Uudised postimees.ee</h1>
<?php
$feed=simplexml_load_file("https://www.postimees.ee/rss");
$linkide_arv =5;
$loendur=1;
foreach($feed->channel->item as $item)
{
    if($loendur <=$linkide_arv) {
        echo "<li>";
        echo "<a href='$item->link'target=_blank>$item->title;";
        echo " / Author:".$item->author;
        echo "</li>";
        $loendur++;
    }
}
?>

</body>
</html>