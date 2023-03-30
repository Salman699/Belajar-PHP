<?php
function hitung($a1,$a2,$tombol){
    if($tombol == '+') $hasil = $a1 + $a2;
    else if ($tombol == '-') $hasil = $a1 - $a2;
    else if ($tombol == '*') $hasil = $a1 * $a2;
    else if ($tombol == '/') $hasil = $a1 / $a2;
    else $hasil = 0;
    return $hasil;
}
?>
<h1> Kalkulatorku</h1>
<form method="POST">
    <div class="inputan">
        <label for="a1">
            Angka 1 <input type="text" id="a1" name="a1" require/></label><br>

        <label for="a2">
            Angka 2 <input type="text" id="a2" name="a2" require/></label><br>

        <input type="submit" name="tombol" value="+">
        <input type="submit" name="tombol" value="-">
        <input type="submit" name="tombol" value="*">
        <input type="submit" name="tombol" value="/">
    </div>
    <div class="hasil">
        <?php
        if(isset($_POST['tombol'])){
            $a1 = $_POST['a1'];
            $a2 = $_POST['a2'];
            $tombol = $_POST['tombol'];
            $hasil = hitung($a1,$a2,$tombol);
            echo "Hasilnya adalah $hasil";
        }
        ?>
    </div>
</form>