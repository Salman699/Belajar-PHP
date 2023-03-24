<?php
// Input data pegawai
$nama = "Salman";
$jabatan = "Manager";
$status = "Sudah Menikah";
$jmlAnak = 4;
$gajiPokok = 0;
$tunjJabatan = 0;
$tunjKeluarga = 0;
$gajiKotor = 0;
$zakatProfesi = 0;
$takeHomePay = 0;

// Hitung gaji pokok berdasarkan jabatan
switch ($jabatan) {
  case "Manager":
    $gajiPokok = 20000000;
    break;
  case "Asisten":
    $gajiPokok = 15000000;
    break;
  case "Kabag":
    $gajiPokok = 10000000;
    break;
  case "Staff":
    $gajiPokok = 4000000;
    break;
}

// Hitung tunjangan jabatan
$tunjJabatan = $gajiPokok * 0.2;

// Hitung tunjangan keluarga berdasarkan status dan jumlah anak
if ($status == "Sudah Menikah") {
  if ($jmlAnak <= 2) {
    $tunjKeluarga = $gajiPokok * 0.05;
  } elseif ($jmlAnak >= 3 && $jmlAnak <= 5) {
    $tunjKeluarga = $gajiPokok * 0.1;
  }
}

// Hitung gaji kotor
$gajiKotor = $gajiPokok + $tunjJabatan + $tunjKeluarga;

// Hitung zakat profesi
$zakatProfesi = ($gajiKotor >= 6000000 && $status == "Muslim") ? $gajiKotor * 0.025 : 0;

// Hitung take home pay (gaji bersih)
$takeHomePay = $gajiKotor - $zakatProfesi;

// Tampilkan hasil perhitungan
echo "Nama: $nama <br>";
echo "Jabatan: $jabatan <br>";
echo "Status: $status <br>";
echo "Jumlah Anak: $jmlAnak <br>";
echo "Gaji Pokok: " . number_format($gajiPokok, 0, ',', '.') . " <br>";
echo "Tunjangan Jabatan: " . number_format($tunjJabatan, 0, ',', '.') . " <br>";
echo "Tunjangan Keluarga: " . number_format($tunjKeluarga, 0, ',', '.') . " <br>";
echo "Gaji Kotor: " . number_format($gajiKotor, 0, ',', '.') . " <br>";
echo "Zakat Profesi: " . number_format($zakatProfesi, 0, ',', '.') . " <br>";
echo "Take Home Pay: " . number_format($takeHomePay, 0, ',', '.') . " <br>";
?>
