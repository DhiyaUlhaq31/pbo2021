<?php

namespace App\Models;
use App\Models\Mahasiswa;
use App\Models\Dosen;

class PerguruanTinggi
{
    public $id;
    public $namaPT;
    protected $akreditasi;
    public $mahasiswa = array();
    public $dosen;

    function __construct($id,$namapt,$akreditasi,$dosen)
    {
        $this->id = $id;
        $this->namaPT = $namapt;
        $this->akreditasi = $akreditasi;
        $this->dosen - $dosen;
    }

    public function registerMaba()
    {
    }

    public function getDosen()
    {
    }
}