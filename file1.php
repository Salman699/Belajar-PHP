<?php 

echo 'Dokumen PHP saya ada di '.$_SERVER['DOCUMENT_ROOT'];
echo '<br> Nama File'.$_SERVER['SCRIPT_FILENAME'];
echo '<hr>Hallo World';

//ini pemanggilan di PHP

//belajar variable
$namaSiswa = "Salman";
$umur = 20;
$berat_badan = 55;
$_pekerjaan = "Mahasiswa";
$tes = "coba";
echo '<hr> ';
echo 'Nama Siswa : '.$namaSiswa;
echo '<br> Umur :'.$umur;
echo '<br> Berat Badan : '.$berat_badan;
echo '<br> Pekerjaan : '.$_pekerjaan;
?>
<!--- Ini adalah pemanggilan dengan menggunakan document HTML -->
<hr>
Nama Siswa : <?= $namaSiswa ?>
<br> Umur : <?= $umur ?>
<br> Berat Badan : <?= $berat_badan ?>
<br> Pekerjaan : <?= $_pekerjaan ?>