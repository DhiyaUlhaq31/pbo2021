<?php

namespace application\backend;

class Pegawai
{
    protected $nip;
    protected $nama;
    protected $no_hp;
    protected $gaji_pokok;

    public function getNip()
    {
        return $this->nip;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getNo_hp()
    {
        return $this->no_hp;
    }

    public function getGaji_pokok()
    {
        return $this->gaji_pokok;
    }

    public function setNip($nip)
    {
        $this->nip = $nip;
    }

    public function setNip($nama)
    {
        $this->nama = $nama;
    }

    public function setNip($no_hp)
    {
        $this->no_hp = $no_hp;
    }

    public function setNip($gaji_pokok)
    {
        $this->gaji_pokok = $gaji_pokok;
    }

    public function TampilkanGaji()
    {

    }
}

namespace application\frontend;

class Pegawai
{
    
}