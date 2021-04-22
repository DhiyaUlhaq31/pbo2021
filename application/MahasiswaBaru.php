<?php

namespace App;

class MahasiswaBaru extends Mahasiswa
{
    protected $no_registrasi;

    function __construct($nim,$nama,$tgl,$jk) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->tanggal_lahir = $tgl;
        $this->jenis_kelamin = $jk;

    public function getNo_registrasi() 
    {
        return $this->nim;
    }

    public function setNo_registras($no_registrasi)
    {
        $this->nim = $nim;
    }

    public function bayarGedung()
    {
        
    }
}