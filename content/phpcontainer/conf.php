<?php
$servernimi="d101721.mysql.zonevs.eu"; // d101721.mysql.zonevs.eu, localhost
$kasutaja="d101721_nikol21"; //d101721_nikol21, Nikolajev21
$parool="Targv21nikola"; // 'Targv21nikola', Nikolajev27
$andmebaas="d101721_nikol21"; // d101721_nikol21, nikolajev21

$yhendus=new mysqli($servernimi,$kasutaja,$parool,$andmebaas);

$yhendus->set_charset('UTF8');

