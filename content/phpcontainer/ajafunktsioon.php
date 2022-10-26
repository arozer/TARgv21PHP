
<h1>ajafunktsioonid</h1>
<div class="simple">

    <h2>Vanuse arvutamine</h2>
    <form method="post" action="">
     palun sisestage oma sünniaeg:
    <input type="date" name="synniaeg">
    <input type="submit" value="Arvuta" name="ok">
    </form>
</div>

<?php
    if (isset($_POST['ok'])) {
        $date1 = date_create("now");
        echo date_format($date1, "d/m/Y");
        echo "</br>";
        $date2 = date_Create($_POST['synniaeg']);
        echo date_format($date2, "d/m/Y");
        echo "</br>";
        $diff = date_diff($date2,$date1);
            if ($date1 > $date2) {
                echo $diff->format("%Y") . " aastat vana";
            }
            else
            {
                echo "te pole veel sündinud";
            }
    }


?>




<?php

function hooaeg()
{
//mis päev on täna?
    $day = date("k");
//sügis päevad
    $autumn_starts = date("k", strtotime("September 23"));
    $autumn_ends = date("k", strtotime("December 21"));

//talv päevad
    $winter_starts = date("k", strtotime("December 22"));
    $winter_ends = date("k", strtotime("March 19"));

//kevad päevad
    $spring_starts = date("k", strtotime("March 20"));
    $spring_ends = date("k", strtotime("June 21"));

// kui $day talv, sügis, kevad päevade vahel

    if ($day >=$autumn_starts && $day <=$autumn_ends):
        $season = "autumn";
    elseif ($day >=$winter_starts && $day <=$winter_ends):
        $season = "winter";
    elseif ($day >=$spring_starts && $day <=$spring_ends):
        $season = "spring";
    else :
        $season = "summer";

    endif;
    $icons = array(
        "spring" => "img/kevad.jpg",
        "summer" => "img/suvi.jpg",
        "winter" => "img/talv.jpg",
        "autumn" => "img/sygis.jpg",
    );
    echo $icons[$season];

}
?>

<?php
echo "<strong>Tänane kuupäev: </strong>";
echo date('d.m.Y', time());
echo "<br>Hooaja pilt<br>";
//echo "<img src='hooaeg();' alt='pilt'>";
?>
<img src="<?php hooaeg(); ?>" alt="pilt">
</div>
<div class="simple">
    <h2>Teine variant  https://pastebin.com/5tSTfCqU </h2>
    <h2>Väljasta vastavalt aastaajale pilt (kevad, suvi, sügis, talv).</h2>
    <?php
    // get today's date
    $today = new DateTime();
    echo 'Täna on: ' . $today->format('m-d-Y') . '<br />';

    // get the season dates
    $spring = new DateTime('March 20');
    $summer = new DateTime('June 20');
    $fall = new DateTime('September 22');
    $winter = new DateTime('December 21');

    switch(true) {
        case $today >= $spring && $today < $summer:
            echo 'Kevad <br>';
            $pildi_aadress = "img/kevad.jpg";
            break;

        case $today >= $summer && $today < $fall:
            echo 'Suvi <br>';
            $pildi_aadress = "img/suvi.jpg";
            break;

        case $today >= $fall && $today < $winter:
            echo 'Sügis <br>';
            $pildi_aadress = "img/sygis.jpg";
            break;

        default:
            echo 'Talv <br> ';
            $pildi_aadress = "img/talv.jpg";
    }

    ?>
    <img width="400px" src="<?=$pildi_aadress?>">
</div>


