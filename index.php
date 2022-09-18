<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Georgi PHP lehestik</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <script src="js/legoScript.js"></script>
</head>
<body>
<?php
include('header.php')
?>

<?php
include('navigation.php')
?>
<main>
    <?php
        if(isSet($_GET["leht"])) {
            include ('content/'.$_GET["leht"].'.php');
        } else {
            echo "siia tuleb sisu";
        }
    ?>
</main>

<?php
include('footer.php')
?>

</body>
</html>