<?php

namespace App\Http\Controllers;

use App\Info;
use App\Sarpras;
use Illuminate\Http\Request;

class WebjurController extends Controller
{
    public function index(){
        $listinfo = Info::all();
        return view("beranda",compact('listinfo'));
    }

    public function showSarpras(){
        $listsarpras = Sarpras::all();
        return view("sarpras", compact('listsarpras'));
    }
}
