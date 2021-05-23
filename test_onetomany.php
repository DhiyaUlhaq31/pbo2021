<?php

require_once('vendor/autoload.php');

use App\Pengguna;
use App\Penjual;
use App\Alamat;

$dhiya = new Pengguna(3,"Dhiya Ulhaq", new Alamat(14, "Pontianak"));

$lapak_budi = new Penjual();
$lapak_budi->setName('Budi A');
$lapak_budi->setId(1);

$lapak_ani = new Penjual();
$lapak_ani->setName('Ani B');
$lapak_ani->setId(2);

$lapak_wati = new Penjual();
$lapak_wati->setName('Wati C');
$lapak_walt->setId(3);

$dhiya->setPenjual($lapak_budi);
$dhiya->setPenjual($lapak_ani);
$dhiya->setPenjual($lapak_wati);

$penjual_dhiya = $dhiya->getPenjual();
echo $penjual_dhiya[0]->getName();// Ada 3 Index (0,1,2) 