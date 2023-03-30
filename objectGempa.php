<?php 
require 'Gempa.php';
$g1 = new Gempa('Banten',0.1);

$ar_data = [$g1];

foreach ($ar_data as $data){
	$data->cetak();
}

 ?>