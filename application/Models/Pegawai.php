<?php

namespace App\Models;

interface Pegawai
{
    // Metode Interface visibility tidak bisa private, yan gbisa digunakan hanya public
 
    private function setNip($nip);

    public function presensiMasuk();

    private function getNip();

    private function setNama($nama);

    private function getNama();
}