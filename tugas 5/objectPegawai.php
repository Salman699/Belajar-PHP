<?php
require 'Pegawai.php';

// membuat objek pegawai
$pegawai1 = new Pegawai('0001', 'Salman', 'Manager', 'Islam', 'Menikah');
$pegawai2 = new Pegawai('0002', 'Budi', 'Asisten Manager', 'Islam', 'Belum Menikah');
$pegawai3 = new Pegawai('0003', 'Andi', 'Kepala Bgian', 'Kristen', 'Menikah');
$pegawai4 = new Pegawai('0004', 'Dewi', 'Staff', 'Buddha', 'Belum Menikah');
$pegawai5 = new Pegawai('0005', 'Rina', 'Staff', 'Hindu', 'Menikah');

// menyimpan objek pegawai ke dalam array
$ar_pegawai = [$pegawai1, $pegawai2, $pegawai3, $pegawai4, $pegawai5];

// menampilkan jumlah pegawai
echo "Jumlah pegawai: " . Pegawai::$jml . "<br>";

// menampilkan nama perusahaan
echo "Nama perusahaan: " . Pegawai::$PT . "<br><br>";

foreach ($ar_pegawai as $pegawai){
	$pegawai->cetak();
}

?>
