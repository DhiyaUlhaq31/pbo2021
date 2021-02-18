<?php
 
 include('Mahasiswa.php');

 $mahasiswa_dhiya = new Mahasiswa();
 $mahasiswa_andri = new Mahasiswa();
 $Mahasiswa_tegar = new Mahasiswa();

 $mahasiswa_dhiya->nim = 1;
 $mahasiswa_dhiya->nama = 1;
 $mahasiswa_dhiya->tanggal_lahir = 1;
 $mahasiswa_dhiya->jenis_kelamin = 1;

 $mahasiswa_dhiya->tampilkanAngkatan();
 $mahasiswa_dhiya->tampilkanUmur();