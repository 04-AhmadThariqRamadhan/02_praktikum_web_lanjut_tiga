<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParameterController extends Controller
{
    public function rekomendasi(){
        return 'Berikut Rekomendasi Mobil';
    }
    public function mobil($nama){
        return 'Rekomendasi Pertama Adalah Mobil '.$nama;
    }
}
