<?php

namespace App\Http\Controllers;

use App\Sarpras;
use Illuminate\Http\Request;

class SarprasController extends Controller
{
    public function show(){
        return view( 'sarpras',[
            'listsarpras' => Sarpras::all()
        ]);
    }
}