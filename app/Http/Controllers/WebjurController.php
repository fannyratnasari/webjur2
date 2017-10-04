<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebjurController extends Controller
{
    public function index(){
        return view("beranda");
    }
}
