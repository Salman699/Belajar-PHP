<!DOCTYPE html>
<html>
<head>
	<title>Jajar Genjang</title>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label for="alas">Masukkan panjang alas:</label>
		<input type="number" name="alas" id="alas"><br><br>
		<label for="tinggi">Masukkan tinggi:</label>
		<input type="number" name="tinggi" id="tinggi"><br><br>
		<label for="sisi_miring">Masukkan panjang sisi miring:</label>
		<input type="number" name="sisi_miring" id="sisi_miring"><br><br>
		<input type="submit" value="Hitung">
	</form>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$alas = $_POST["alas"];
		$tinggi = $_POST["tinggi"];
		$sisi_miring = $_POST["sisi_miring"];

		$luas = $alas * $tinggi;
		$keliling = 2 * ($alas + $sisi_miring);

		echo "<h2>Hasil Perhitungan</h2>";
		echo "Luas Jajar Genjang: " . $luas . "<br>";
		echo "Keliling Jajar Genjang: " . $keliling;
	}
	?>
</body>
</html>
