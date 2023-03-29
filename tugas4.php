<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $prodi = $_POST['prodi'];
    $skill = isset($_POST['skill']) ? $_POST['skill'] : array();
    $jumlah_skill = count($skill);
    $email = $_POST['email'];

    $skor_skill = 0;
    $kategori_skill = 'Tidak Memadai';

    // Hitung skor skill berdasarkan jumlah skill yang dikuasai
    switch ($jumlah_skill) {
        case 1:
            $skor_skill = 20;
            break;
        case 2:
            $skor_skill = 40;
            break;
        case 3:
            $skor_skill = 60;
            break;
        case 4:
            $skor_skill = 80;
            break;
        case 5:
            $skor_skill = 100;
            break;
        default:
            break;
    }

    // Tentukan kategori skill berdasarkan skor skill
    if ($skor_skill >= 0 && $skor_skill < 20) {
    $kategori_skill = 'Tidak Memadai';
} elseif ($skor_skill >= 20 && $skor_skill < 40) {
    $kategori_skill = 'Kurang';
} elseif ($skor_skill >= 40 && $skor_skill < 60) {
    $kategori_skill = 'Cukup';
} elseif ($skor_skill >= 60 && $skor_skill < 100) {
    $kategori_skill = 'Baik';
} elseif ($skor_skill >= 100 && $skor_skill <= 150) {
    $kategori_skill = 'Sangat Baik';
}

    // Tampilkan hasil perhitungan skor dan kategori skill
    echo '<h2>Hasil Perhitungan Skor dan Kategori Skill</h2>';
    echo '<table>';
    echo '<tr><td>NIM</td><td>:</td><td>' . $nim . '</td></tr>';
    echo '<tr><td>Nama</td><td>:</td><td>' . $nama . '</td></tr>';
    echo '<tr><td>Jenis Kelamin</td><td>:</td><td>' . $jenis_kelamin . '</td></tr>';
    echo '<tr><td>Program Studi</td><td>:</td><td>' . $prodi . '</td></tr>';
    echo '<tr><td>Skill</td><td>:</td><td>' . implode(', ', $skill) . '</td></tr>';
    echo '<tr><td>Skor Skill</td><td>:</td><td>' . $skor_skill . '</td></tr>';
    echo '<tr><td>Kategori</td><td>:</td><td>' . $kategori_skill . '</td></tr>';
    echo '<tr><td>Email</td><td>:</td><td>' . $email . '</td></tr>';
    echo '</table>';
} else {
    // Tampilkan formulir untuk memasukkan data
    echo '<h2>Form Hitung Skor dan Kategori Skill</h2>';
    echo '<form method="POST">';
    echo '<label>NIM:</label>';
    echo '<input type="text" name="nim" required><br><br>';
    echo '<label>Nama:</label>';
    echo '<input type="text" name="nama" required><br><br>';
    echo '<label>Jenis Kelamin:</label>';
    echo '<input type="radio" name="jenis_kelamin" value="Laki-laki" required>Laki-laki';
    echo '<input type="radio" name="jenis_kelamin" value="Perempuan" required>Perempuan<br><br>';
    echo '<label>Program Studi:</label>';
    echo '<select name="prodi" required>';
    echo '<option value="">-- Pilih Program Studi --</option>';
    echo '<option value="Teknik Informatika">Teknik Informatika</option>';
    echo '<option value="Sistem Informasi">Sistem Informasi</option>';
    echo '<option value="Teknik Komputer">Teknik Komputer</option>';
    echo '</select><br><br>';
    echo '<label>Skill</label>';
    echo '<input type="checkbox" name="skill[]" value="HTML"> HTML<br>';
    echo '<input type="checkbox" name="skill[]" value="CSS"> CSS<br>';
    echo '<input type="checkbox" name="skill[]" value="JavaScript"> JavaScript<br>';
    echo '<input type="checkbox" name="skill[]" value="RWD Bootstrap"> RWD Bootstrap<br>';
    echo '<input type="checkbox" name="skill[]" value="Python"> Python<br><br>';
    echo '<label>Email:</label>';
    echo '<input type="email" name="email" required><br><br>';
    echo '<input type="submit" value="Hitung">';
    echo '</form>';
}

?>