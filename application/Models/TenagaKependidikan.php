<?php

namespace App\Models;

require_once('Pengguna.php');

class TenagaKependidikan extends Pengguna implements Pegawai
{
    private $nip;
    private $nama;
    private $alamat;

    function __construct($username,$password,$email,$nim,$nama,$ipk,$alamat)
    {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->nim = $nim;
        $this->nama = $nama;
        $this->IPK = $ipk;
        $this->alamat = $alamat;

    public function hitungTunjanganKinerja()
    {
    }
   
    public function presensiMasuk()
    {
    }

    public function setNip($nip)
    {
        $this->nip = $nip;
    }

    public function getNip()
    {
        return $this->nip;
    }

    public function setNama($nama)
    {
        $this->nama = $nama
    }

    public function getNama()
    {
        return $$this->nama;
    }    
}