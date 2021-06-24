<?php

namespace App\Models;
use App\Models\Dosen;
use App\Models\Mahasiswa;

Class TugasAkhir
{
 public $id;
 public $judulTA;
 public $mahasiswaTA;
 public $pembimbingTA = [];
 public $pengujiTA = [];

 public function tambahTA()
 {
 }
}

