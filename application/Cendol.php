<?php
namespace App;

use App\Minuman;

class Cendol implements Minuman
{
    public function buat()
    {
        echo "Tambahkan cendol";
        echo "dan air gula merah cair,";
        echo "tambahkan es batu.";
    }
    
    public function minum()
    {
        echo "Disedot dengan pipet/sedotan/selang.";
    }

    public function diberikanPadaTeman()
    {
        echo "Ini untukmu, tenang saja, tidak ada sianida di dalamnya.";
    }
}

?>