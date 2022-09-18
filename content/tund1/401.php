<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
// andmed massivis
$data=["nimi"=>"Georgi Nikolajev",
    "aadress" =>"Sõpruse pst, 184 Tallinn",
    "pilt" => "linux.jpg",
    "koduleht" => "http://www.tthk.ee",
    ];?>

<h2><strong> ülesanne 1 / andmed massivist</strong></h2>
<p>
    <i>
        <?=$data["aadress"]?>
    </i>
</p>
<img src="<?=$data["pilt"]?>" alt="pldike">
<br>
<a href="<?=$data["koduleht"]?>" target="_blank"> TTHK koduleht </a>

<h2>ülesanne 1 massiv array funktsooniga</h2>
<?php
$array=array("Georgi Nikolajev","sõpruse pst 184 Tallinn",
    "linux.jpg","www.tthk.ee");
echo "<b>$array[0]</b>";
echo "<br>";
echo "<i>$array[1]</i>";
echo "<br>";
echo "<img src=$array[2] alt=pildike2>";
echo "<br>";
echo "<a href='hhtps://$array[3]'>koduleht</a>";
?>

</body>
</html>