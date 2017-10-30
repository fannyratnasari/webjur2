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

    public function showDetail($id){
        $info = Info::find($id);
        return view('isi')->with('info', $info);

    }
}
