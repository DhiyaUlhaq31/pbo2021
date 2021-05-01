<?php
require('vendor/autoload.php');

use App\Mahasiswa;

Mahasiswa::bergerak();

echo Mahasiswa::$status .;

$status_mahasiswa = Mahasiswa::NON_AKTIF;
echo $status_mahasiswa .;