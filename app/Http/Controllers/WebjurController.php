<?php

namespace App\Http\Controllers;

use App\Info;
use Illuminate\Http\Request;

class WebjurController extends Controller
{
    public function index(){
        $listinfo = Info::all();
        return view("beranda",compact('listinfo'));
    }
}
