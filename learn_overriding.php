<?php

class Pegawai
{
    public $nama;

    public public function sapa()
    {
        echo "Halo " . $this->nama . " posisi anda saat ini adalah pegawai";
    }

    public function masuk()
    {
        echo " Anda masuk kerja pada tanggal " . date('Y-m-d') . ;
    }
}

class KetuaJurusan extends Pegawai
{
    public function sapa()
    {
        echo " Hei " . $this->nama . "anda itu ketua jurusan ya" ;
    }

    public function parentSapa()
    {
        return parent::sapa();
    }
}

$toni = new KetuaJurusan();
$toni->nama = 'Toni';
$toni->parentSapa();
$toni->masuk();
