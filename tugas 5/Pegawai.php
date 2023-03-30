<?php 
class Pegawai {
  public static $PT = "PT XYZ";
  public static $jml = 0;

  private $nip;
  private $nama;
  private $jabatan;
  private $agama;
  private $status;
  private $gapok;
  private $tunj_jab;
  private $tunj_kel;
  private $zakat;
  private $gaji_bersih;

  public function __construct($nip, $nama, $jabatan, $agama, $status) {
    $this->nip = $nip;
    $this->nama = $nama;
    $this->jabatan = $jabatan;
    $this->agama = $agama;
    $this->status = $status;
    $this->gapok = $this->hitungGapok($jabatan);
    $this->tunj_jab = $this->hitungTunjanganJabatan();
    $this->tunj_kel = $this->hitungTunjanganKeluarga();
    $this->zakat = $this->hitungZakat();
    $this->gaji_bersih = $this->hitungGajiBersih();
    self::$jml++;
  }

  private function hitungGapok($jabatan) {
    switch ($jabatan) {
      case 'Manager':
        return 10000000;
      case 'Asisten Manager':
        return 8000000;
      case 'Kepala Bgian':
        return 6000000;
      case 'Staff':
        return 4000000;
      default:
        return 0;
    }
  }

  private function hitungTunjanganJabatan() {
    $tunj_jab = $this->gapok * 0.2; // 20% dari Gaji Pokok
    return $tunj_jab;
  }

  private function hitungTunjanganKeluarga() {
    $tunj_kel = $this->status == 'Menikah' ? $this->gapok * 0.1 : 0; // 10% dari Gaji Pokok jika sudah menikah
    return $tunj_kel;
  }

  private function hitungZakat() {
    $gaji_kotor = $this->gapok + $this->tunj_jab + $this->tunj_kel;
    $zakat = $this->agama == 'Islam' && $gaji_kotor >= 6000000 ? $gaji_kotor * 0.025 : 0; // 2,5% dari Gaji Pokok untuk muslim dan Gaji Kotor minimal 6jt
    return $zakat;
  }

  private function hitungGajiBersih() {
    $gaji_bersih = $this->gapok + $this->tunj_jab + $this->tunj_kel - $this->zakat; // Gaji Bersih = Gaji Pokok + Tunjangan Jabatan + Tunjangan Keluarga - Zakat Profesi
    return $gaji_bersih;
  }


  public function getNip() {
    return $this->nip;
  }

  public function getNama() {
    return $this->nama;
  }

  public function getJabatan() {
    return $this->jabatan;
  }

  public function getAgama() {
    return $this->agama;
  }

  public function getStatus() {
    return $this->status;
  }

  public function getGapok() {
    return $this->gapok;
  }



  public function cetak(){
  	echo "NIP:".$this->nip;
  	echo "<br> Nama :".$this->nama;
 	echo "<br> Jabatan :".$this->jabatan;
  	echo "<br> Agama :".$this->agama;
  	echo "<br> Status :".$this->status;
  	echo "<br> Gaji Pokok: " . number_format($this->gapok, 0, ',', '.');
  	echo "<br> Tunjangan Jabatan: " . number_format($this->tunj_jab, 0, ',', '.');
  	echo "<br> Tunjangan Keluarga: " . number_format($this->tunj_kel, 0, ',', '.');
  	echo "<br> Zakat Profesi: " . number_format($this->zakat, 0, ',', '.');
  	echo "<br> Gaji Bersih: " . number_format($this->gaji_bersih, 0, ',', '.');
  	echo '<hr>';
  }
}

 ?>
