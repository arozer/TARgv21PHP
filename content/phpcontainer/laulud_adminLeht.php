<?php
require_once ('conf.php');
global $yhendus;
// tabeli andmete lisamine

if(!empty($_REQUEST["uusnimi"])){
        $kask = $yhendus->prepare("INSERT INTO laulud(laulunimi, lisamisaeg) VALUES (?, NOW())");
        $kask->bind_param('s', $_REQUEST["uusnimi"]);
        $kask->execute();

}

//peitmine
if(isset($_REQUEST['peitmine'])) {
    $kask = $yhendus->prepare("UPDATE laulud SET avalik=0 Where id=?");
    $kask->bind_param('s', $_REQUEST['peitmine']);
    $kask->execute();
}
//naitamine
if(isset($_REQUEST['naitamine'])) {
    $kask = $yhendus->prepare("UPDATE laulud SET avalik=1 Where id=?");
    $kask->bind_param('s', $_REQUEST['naitamine']);
    $kask->execute();
}

//delete
if(isset($_REQUEST['kustuta'])) {
    $kask = $yhendus->prepare("DELETE FROM laulud Where id=?");
    $kask->bind_param('s', $_REQUEST['kustuta']);
    $kask->execute();

}
//punktid nulliks
if(isset($_REQUEST['punktidnulliks'])) {
    $kask = $yhendus->prepare("UPDATE laulud SET punktid=0 where id=?");
    $kask->bind_param('i', $_REQUEST['punktidnulliks']);
    $kask->execute();
}
// kommentari kustutamine
if(isset($_REQUEST['kommentaridkustuta'])) {
    $kask = $yhendus->prepare("UPDATE laulud SET kommentaarid='' WHERE id=?");
    $kask->bind_param('s', $_REQUEST['kommentaridkustuta']);
    $kask->execute();
}
?>
<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Laulude adminleht</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<?php
include('header.php')
?>
<main>
<lu>
    <li><a href="https://nikolajev20.thkit.ee/?">Koduleht</a></li>
    <li><a href="laulud_adminLeht.php">Administreerimise leht</a></li>
    <li><a href="laulud.php">Kasutaja leht</a></li>
    <li> <a href="https://github.com/arozer/TARgv21PHP">Git HUB</a></li>
</lu>
<h1>Laulude admin leht</h1>
<h2>Laulu lisamine</h2>
<form action="?" method="post">
    <label for="nimi">Laulunimi</label>
    <input type="text" name="uusnimi" id="nimi" placeholder="laulunimi">
    <input type="submit" value="Ok">
</form>


<table>
    <tr>
        <th></th>
        <th> Laulunimi </th>
        <th> Punktid </th>
        <th> Lisamisaeg </th>
        <th> Staatus </th>
        <th> Haldus </th>
        <th> punktid nulliks </th>
        <th> kustuta kommentaarid </th>
    </tr>
    <?php
    $kask=$yhendus->prepare('SELECT id, laulunimi, punktid, lisamisaeg, avalik,kommentaarid FROM laulud');
    $kask->bind_result($id, $laulunimi, $punktid, $aeg, $avalik,$kommentaarid);
    $kask->execute();
    while($kask->fetch()){
        $seisund="Peidetud";
        $param="naitamine";
        $tekst="Näita";
        if($avalik==1){
            $seisund="Avatud";
            $param="peitmine";
            $tekst="Peida";
        }

        echo "<tr>";
        echo "<td><a href='?kustuta=$id'>Kustuta</a></td>";
        echo "<td>".htmlspecialchars($laulunimi)."</td>";
        echo "<td>$punktid</td>";
        echo "<td>$aeg</td>";
        echo "<td>$kommentaarid</td>";
        echo "<td>".($seisund)."</td>";
        echo "<td><a href='?$param=$id'>$tekst</a></td>";
        echo "<td><a href='?punktidnulliks=$id'>punktid nulliks</a></td>";
        echo "<td><a href='?kommentaridkustuta=$id'>kustuta kommentaarid </a></td>";

        echo "</tr>";
    }


    ?>

</table>
</main>
<?php
include('footer.php')
?>
</body>
<?php
$yhendus->close();
// Ülesanne:
// Admin lehel - laulu kustutamine
// css table style
// Admin lehel -punktid nulliks
// Üldine Navigeerimismenüü / adminleht/ kasutajaleht
//<nav>
//    <a href="homepage.php">Koduleht</a>
//    <a href="laulud_adminLeht.php">Administreerimise leht</a>
//    <a href="laulud.php">Kasutaja leht</a>
//    <a href="link">Git HUB</a>
//</nav>
// Admin näeb kommentaarid ja saab neid kustutada
// Kasutaja ei saa lisada tühjad kommentaarid

// Homepage - Laulu lisamine --->alert(Laulu on lisatud) või kohe suunatakse Kasutaja lehele
?>
</html>

