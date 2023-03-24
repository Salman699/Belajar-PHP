<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Latihan pemrosesan form</title>
</head> 
<body>
	<form method="POST">
		<p>form input nilai</p>
		<label>Nama</label>
		<input type="text" name="nama" placeholder="Masukan nama"><br>
		<label>Matakuliah</label>
		<select name="matkul">
			<option>---pilih matakuliah---</option>
			<option value="HTML">HTML dan CSS</option>
			<option value="JS">Javascript</option>
			<option value="UI">UI/UX</option>
			<option value="PHP">PHP</option>
		</select><br>
		<label>Nilai</label>

		<input type="text" name="nilai" placeholder="Masukan Nilai Anda">
		<button name="proses" type="submit">Simpan</button>
	</form>
	<?php 
	$nama = $_POST['nama'];
	$matakuliah = $_POST['matkul'];
	$nilai = $_POST['nilai'];
	$tombol = $_POST['proses'];

$ket = ($nilai >= 60) ? "lulus" : "gagal";
if($nilai >= 85 && $nilai <= 100) $grade = "A";
	else if ($nilai >= 75 && $nilai <= 84) $grade = "B";
	else if ($nilai >= 60 && $nilai <= 74) $grade = "C";
	else if ($nilai >= 30 && $nilai <= 59) $grade = "D";
	else if ($nilai >= 0 && $nilai <= 29) $grade = "E";
	else $grade = "";

switch ($grade){
    case "A" : $predikat = "memuaskan"; break;
    case "B" : $predikat = "Bagus"; break;
    case "C" : $predikat = "Cukup"; break;
    case "D" : $predikat = "Kurang"; break;
    case "E" : $predikat = "Buruk"; break;
    default: $predikat ="";
}
if(isset($tombol)){
?>
Nama Mahasiswa : <?= $nama ?>
<br>Matakuliah : <?= $matakuliah ?>
<br>Nilai : <?= $nilai ?>
<br>Keterangan : <?= $ket ?>
<br>Grade : <?= $grade ?>
<br>Predikat : <?= $predikat ?>

<?php } ?>

</body>
</html>