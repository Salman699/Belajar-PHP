<?php
require_once 'Person.php';
class Staff extends Person {
    public $nip;
    public $bidang;
    public $gaji;

    public function __construct($nama, $gender, $nip, $bidang, $gaji){
        parent::__construct($nama, $gender);
        $this->nip = $nip;
        $this->bidang = $bidang;
        $this->gaji = $gaji;
    }
    public function cetak(){
        parent::cetak();
        echo '<br> Nomor Induk Pegawai :'.$this->nip;
        echo '<br> Bidang :'.$this->bidang;
        echo '<br> Gaji'.$this->gaji;
    }
}

?>
