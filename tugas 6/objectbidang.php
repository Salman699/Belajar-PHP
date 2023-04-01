<?php
require_once 'Bentuk2D.php';
require_once 'Lingkaran.php';
require_once 'PersegiPanjang.php';
require_once 'Segitiga.php';

$lingkaran = new Lingkaran(7);
$persegiPanjang = new PersegiPanjang(4, 8);
$segitiga = new Segitiga(6, 10, 8, 10);


echo "<table border='1'>";
echo "<tr><th>Nama Bidang</th><th>Luas</th><th>Keliling</th></tr>";

echo "<tr><td>".$lingkaran->namaBidang()."</td><td>".$lingkaran->luasBidang()."</td><td>".$lingkaran->kelilingBidang()."</td></tr>";
echo "<tr><td>".$persegiPanjang->namaBidang()."</td><td>".$persegiPanjang->luasBidang()."</td><td>".$persegiPanjang->kelilingBidang()."</td></tr>";
echo "<tr><td>".$segitiga->namaBidang()."</td><td>".$segitiga->luasBidang()."</td><td>".$segitiga->kelilingBidang()."</td></tr>";

echo "</table>";
?>
