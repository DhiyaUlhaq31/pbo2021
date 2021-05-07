<?php
namespace App;

class Kopi implements Minuman
{
    public function buat()
    {
        echo "Masak air panas hingga 100 derajat celcius ";
        echo "masukkan kopi ke dalam gelas dan tuangkan air panas ";
        echo "aduk sebanyak 30 kali putaran. ";
        echo "Diamkan selama 15 menit ";
        echo "tambahkan guka aren. ";
    }

    public function minum()
    {
        echo "Minum dengan cara diseruput sedikit demi sedikit. ";
    }

    public function tambahSusu()
    {
        echo "Tambahkan susu kedalam kopi. ";
    }
}