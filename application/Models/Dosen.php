<?php

namespace App\Models;

require_once('Pengguna.php');

class Dosen extends Pengguna implements Pegawai
{
    private $nip;
    private $nama;
    private $no_telp;

    function __construct($username,$password,$email,$nip,$nama,$notelepon){
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_telp = $notelepon;
    }

    public function validasiMahasiswa()
    {
    }

    public function presensiMasuk()
    {
    }

    public function setNip($nip)
    {
    }

    public function getNip()
    {
    }

    public function setNama($nama)
    {
    }

    public function getNama()
    {
    }
}