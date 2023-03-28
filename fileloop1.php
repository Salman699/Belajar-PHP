<?php 
//jika tidak menggunakan looping
echo 'Bilangan 1';
echo '<br>bilangan 2';
echo '<hr>';
//ini contoh looping increment
for($x=1; $x <= 10; $x++){
    echo '<br> Bilangan '.$x;
}
//ini contoh looping decrement
for($y=10; $y >= 1; $y--){
    echo '<br> Angka '.$y;
}

/// looping menggunakan while 
echo '<hr>looping menggunakan while';

$xz=1;
while($xz <= 5){
    echo '<br> Bilangan'.$xz;
    $xz++;
}

$yz=5;
while($yz >= 1){
    echo '<br>angka '.$yz;
    $yz--;
}

//contoh do while 
$d=1;
do {
    echo '<br>'.$d;
    $d++;
}
while($d<=10);
?>