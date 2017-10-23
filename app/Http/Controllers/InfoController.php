<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;

class InfoController extends Controller
{
    public function show(){
        return view( '',[
            'listinfo' => Info::all()
        ]);
    }

    public function showBeasiswa(){

        return view('beasiswa');
    }
}
