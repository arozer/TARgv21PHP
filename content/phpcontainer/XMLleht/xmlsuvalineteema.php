<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>XML kodutoo</title>
    <link rel="stylesheet" type="text/css" href="../../../style/style2.css">
</head>
<body>
<?php
$employees=simplexml_load_file("content/phpcontainer/XMLleht/tootajad.xml");

// otsing toode nimetuse järgi
function searchByName($query)
{
    global $employees;
    $result=array();
    foreach ($employees->details as $employees) {
        if (substr(strtolower($employees->firstname), 0,strlen($query)) ==strtolower($query)) {
            array_push($result, $employees);
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

    $xml_root = $xmlDoc->createElement("employees");
    $xmlDoc->appendChild($xml_root);

    $xml_details = $xmlDoc->createElement("details");
    $xmlDoc->appendChild($xml_details);

    $xml_root->appendChild($xml_details);

    $xml_details->appendChild($xmlDoc->createElement('firstname', $_POST['eesnimi']));
    $xml_details->appendChild($xmlDoc->createElement('lastname',$_POST['perekonnanimi']));
    $xml_details->appendChild($xmlDoc->createElement('title',$_POST['positsioon']));
    $xml_details->appendChild($xmlDoc->createElement('division', $_POST['valdkond']));
    $xml_details->appendChild($xmlDoc->createElement('building',$_POST['hoone']));
    $xml_details->appendChild($xmlDoc->createElement('room',$_POST['tuba']));


    $xmlDoc->save('.xml');
}


//XML andmete täiendamine
if(isset($_POST['submit']) && !$uus_fail){
    $xmlDoc = new DOMDocument("1.0","UTF-8");
    $xmlDoc->preserveWhiteSpace = false;
    $xmlDoc->load('tootajad.xml');
    $xmlDoc->formatOutput = true;

    $xml_root = $xmlDoc->documentElement;
    $xmlDoc->appendChild($xml_root);

    $xml_details = $xmlDoc->createElement("details");
    $xmlDoc->appendChild($xml_details);

    $xml_root->appendChild($xml_details);

    $xml_details->appendChild($xmlDoc->createElement('firstname', $_POST['eesnimi']));
    $xml_details->appendChild($xmlDoc->createElement('lastname',$_POST['perekonnanimi']));
    $xml_details->appendChild($xmlDoc->createElement('title',$_POST['positsioon']));
    $xml_details->appendChild($xmlDoc->createElement('division',$_POST['valdkond']));
    $xml_details->appendChild($xmlDoc->createElement('building',$_POST['hoone']));
    $xml_details->appendChild($xmlDoc->createElement('room',$_POST['tuba']));

    $xmlDoc->save('tootajad.xml');
}
$andmed=simplexml_load_file('content/XMLleht/tootajad.xml');

?>
</br>
<h2>töötajad sisestamine</h2>
<form method="post" action="">
    <label for="eesnimi">Eesnimi</label>
    <input type="text" id="eesnimi" name="eesnimi">
    <br>
    <label for="perekonnanimi">Perekonnanimi</label>
    <input type="text" id="perekonnanimi" name="perekonnanimi">
    <br>
    <label for="positsioon">töötaja positsioon</label>
    <input type="text" id="positsioon" name="positsioon">
    <br>
    <label for="valdkond">valdkond</label>
    <input type="text" id="valdkond" name="valdkond">
    <br>
    <label for="hoone">hoone number</label>
    <input type="text" id="hoone" name="hoone">
    <label for="tuba">tuba number</label>
    <input type="text" id="tuba" name="tuba">

    <br>
    <label for="uus_fail">Loo uus fail:</label>
    <input type="checkbox" name="uus_fail" id="uus_fail" value="1">
    <br>
    <input type="submit" value="Sisesta" id="submit" name="submit">

</form>
<br>
<h3>Töötaja otsing</h3>
<form action="?" method="post">
    <input type="text" id="otsing" name="otsing" placeholder="töötaja nimi">
    <input type="submit" value="OK">
</form>
<strong>kõik töötajate andmed</strong>
<table border="1">
    <tr>
        <th>Eesnimi</th>
        <th>Perekonnanimi</th>
        <th>positsioon</th>
        <th>Valdkond</th>
        <th>hoone</th>
        <th>tuba</th>
    </tr>
    <?php
    foreach ($employees->details as $details) {
        echo "<tr>";
        echo "<td>".$details->firstname."</td>";
        echo "<td>".$details->lastname."</td>";
        echo "<td>".$details->title."</td>";
        echo "<td>".$details->division."</td>";
        echo "<td>".$details->building."</td>";
        echo "<td>".$details->room."</td>";
        echo "</tr>";
    }
    ?>
</table>
</br>
<?php
if(!empty($_POST["otsing"]))
{
    $result=searchByName($_POST["otsing"]);
    foreach ($result as $details)
    {
        echo "<li>".$details->firstname.", ".$details->lastname;
        echo "</li>";
    }

}
?>
</body>
</html>