<?php
require_once 'hewan1.php';
require_once 'hewan2.php';
require_once 'hewan3.php';

$h1 = new Kucing();
$h2 = new Kambing();
$h3 = new Anjing();

$ar_hewan = [$h1,$h2,$h3];
foreach($ar_hewan as $hewan){
    echo '<br>'.$hewan->bersuara();
}

?>