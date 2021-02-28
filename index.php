<?php
 
 require_once ('Mahasiswa.php');
 require_once ('MahasiswaBaru');
 require_once ('Dosen.php');
 require_once ('Pegawai.php');

 $dhiya = new Mahasiswa('H1101191053','DHIYA ULHAQ','2001-10-31'.'PRIA');

 $andri = new Mahasiswa('H1101191070','ANDRY MAULANA','2001-02-01','Pria');

 $bayu = new Mahasiswa('H1101191047','BAYU FIRMADI','2001-03-04','Pria');

 $dhiya->tampilkanAngkatan();
 $dhiya->tampilkanUmur();

 ?>