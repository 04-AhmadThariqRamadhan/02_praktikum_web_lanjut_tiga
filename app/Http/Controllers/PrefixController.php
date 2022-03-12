<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrefixController extends Controller
{
    public function toyota(){
        return "Ini Adalah Halaman Mobil Toyota";
    }
    public function daihatsu(){
        return "Ini Adalah Halaman Mobil Daihatsu";
    }
    public function bmw(){
        return "Ini Adalah Halaman Mobil BMW";
    }
    public function karir(){
        return "Program Karir";
    }
    public function magang(){
        return "Program Magang";
    }
    public function kunjungan(){
        return "Program Kunjungan Industri";
    }
}
