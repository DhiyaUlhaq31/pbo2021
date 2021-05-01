<?php

namespace App;

class Mahasiswa
{
    protected $nim;
    protected $nama;
    protected $tanggal_lahir;
    protected $jenis_kelamin;
    const AKTIF = 1;
    const NON_AKTIF = 0;
    public static $status = self::aktif;
    
    function __construct($nim,$nama,$tgl,$jk) 
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->tanggal_lahir = $tgl;
        $this->jenis_kelamin = $jk;
    }

    public function getNim() 
    {
        return $this->nim;
    }

    public function getNama() 
    {
        return $this->nama;
    }

    public function getTanggal_lahir() 
    {
        return $this->tanggal_lahir;
    }

    public function getJenis_kelamin() 
    {
        return $this->jenis_kelamin;
    }

    public function setNim($nim)
    {
         $this->nim = $nim;
    }

    public function setNama($nama)
    {
         $this->nama = $nama;
    }

    public function setTanggal_lahir($tanggal_lahir) 
    {
         $this->tanggal_lahir = $tanggal_lahir;
    }

    public function setJenis_Kelamin($jenis_kelamin) 
    {
         $this->jenis_kelamin = $jenis_kelamin;
    }

    public function tampilkanAngkatan () 
    {
        echo substr ($nim,5,-4);
    }

    public function tampilkanUmur () 
    {
        echo date_diff(date_create($this->tanggal_lahir), date_create('today'))->y;
    }

    public function tampilkanNama($nama) 
    {
        echo $this->nama;
    }
    
    public static function bergerak()
    {
        echo "agen solusi, bukan agen perubahan";
    }

    public function tuntaskan()
    {
        $this->bergerak();
        echo "memperbaiki menjadi lebih baik";
    }

    public static function hitungSks($sks,$bobot)
    {
        $total_sks = $sks * $bobot;
        echo "Bobot Bernilai = ".$bobot.;
        echo "Total sks dengan bobot berniali ".$bobot." adalah = "$.sks. SKS;
        echo "Total sks x bobot =";
        return $total_sks;
    }
?>
