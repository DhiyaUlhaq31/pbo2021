<?php

namespace App;

class EsJeruk implements Minuman
{
    public function buat()
    {
        echo "Masukan blender";
    }

    public function minum()
    {
        echo "Minumlah";
    }

    public static function dilihat()
    {
        echo "Cuman boleh dilihat saja, tidak diminum.";
    }
}