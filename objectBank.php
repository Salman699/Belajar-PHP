<?php 
require 'Bank.php';
//ciptakan object

$n1 = new Bank('001','Salman','300000000');
$n2 = new Bank('002','Bagus','400000000');
$n3 = new Bank('003','Alfa','350000000');
$n4 = new Bank('004','Rizi','200000000');
$n5 = new Bank('005','Tubagus','500000000');

$n1->ambil(20000000);
$n1->setor(50000000);


//cetak menggunakan looping
$dataNasabah = array($n1,$n2,$n3,$n4,$n5);
foreach ($dataNasabah as $data){
	$data->cetak();
}

//cetak manual
// $n1->cetak();
// $n2->cetak();
// $n3->cetak();
// $n4->cetak();
// $n5->cetak();

 ?>