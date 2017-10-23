<?php

namespace App\Http\Controllers;

use App\Birokrasi;
use Illuminate\Http\Request;

class BirokrasiController extends Controller
{
    public function show(){
        return view( 'birokrasi',[
            'listbirokrasi' => Birokrasi::all()
        ]);
    }
}
