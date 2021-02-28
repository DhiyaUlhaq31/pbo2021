<?php
class Mahasiswa
{
    public $nim;
    public $nama;
    public $tanggal_lahir;
    public $jenis_kelamin;
    
    function __construct($nim,$nama,$tgl,$jk) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->tanggal_lahir = $tgl;
        $this->jenis_kelamin = $jk;
    }

    public function tampilkanAngkatan () {
        echo substr ($nim,5,-4);
    }

    public function tampilkanUmur () {
        echo date_diff(date_create($this->tanggal_lahir), date_create('today'))->y;
    }

    public function tampilkanNama($nama) {
        echo $this->nama;
    }

}
?>