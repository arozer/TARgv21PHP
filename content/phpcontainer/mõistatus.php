<h2>Mõistatus</h2>
<h5>Arva ära 2 arvu</h5>
<?php

function clearVarsExcept($url, $varname){return strtok(basename($_SERVER['REQUEST_URI']),"?")."?$varname=".$_REQUEST[$varname];
}

$arv1 = 27;
$arv2 = 34;
echo "kui me liidame 2 arvu kokku, siis tuleb:".($arv1 + $arv2);
echo "<br>";
echo "kui esimene arv on ruudus = ".pow($arv1,2);
echo "<br>";
echo "kui esimene arv jagada teisega  = ".($arv1/$arv2);
?>
<h2> Kontrolli arvud:
</h2>
<form name="arvud" action="<?=clearVarsExcept(basename($_SERVER['REQUEST_URI']),"leht")?>" method="post">
    <label for="number1">Esimene arv</label>
    <input type="number" name="number1" id="number1">
    <br>

    <label for="number1">Teine arv</label>
    <input type="number" name="number2" id="number2">
    <br>

    <input type="submit" value="Kontrolli">
</form>
<?php
if(isSet($_REQUEST["number1"]) AND isset($_REQUEST["number2"])){
    if($_REQUEST["number1"] ==$arv1 AND $_REQUEST["number2"] ==$arv2 )
    {
        echo "Õige!";
        echo "<body style='background-color: green'>";
    }
    else if($_REQUEST["number1"] ==$arv1 AND $_REQUEST["number2"] !=$arv2 ){
        echo "ainult 1. on õige";
        echo "<body style='background-color: yellow'>";
    }
    else if($_REQUEST["number1"] !=$arv1 AND $_REQUEST["number2"] ==$arv2 ){
        echo "ainult 2. on õige";
        echo "<body style='background-color: yellow'>";
    }
    else
    {
      echo  "vale!";
      echo "<body style='background-color: red'>";
    }
}

?>
