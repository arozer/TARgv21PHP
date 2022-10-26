<?php
require_once('conf.php');
global $yhendus;
if(isset($_REQUEST["nimi"])) {
    $kask = $yhendus->prepare("insert into osalejad(nimi,perekonnanimi,telefon,pilt) VALUES (?,?,?,?)");
    $kask->bind_param("ssss",$_REQUEST["nimi"],$_REQUEST["perekonnanimi"],$_REQUEST["telefon"],$_REQUEST["pilt"]);
    $kask->execute();
}
$kask=$yhendus->prepare("SELECT id, nimi, perekonnanimi, telefon,pilt FROM osalejad");
$kask->bind_result($id, $nimi, $perekonnanimi,$telefon,$pilt);
$kask->execute();
?>

<h1>Uue osalejate lisamine</h1>
<form action="">
    <input type="hidden" name="lisamisvorm">
    Nimi: <input type="text" name="nimi">
    <br>
    Perekonnanimi: <input type="text" name="perekonnanimi">
    <br>
    Telefon: <input type="text" name="telefon">
    <br>
    Pildi link: <textarea name="pilt">
    </textarea>
    <br>
    <input type="submit" value="Lisa">
</form>
<h2>vaata matkamine osalejad tabel</h2>
<a href="https://nikolajev20.thkit.ee/?leht=matkaleht%20naitamine">matkaleht naitamine</a>
<?php
$yhendus->close();
?>
