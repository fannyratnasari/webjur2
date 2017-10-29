<?php

namespace App\Http\Controllers;

use App\Info;
use App\Sarpras;
use Illuminate\Http\Request;

class WebjurController extends Controller
{
    public function index(){
        $listinfo = Info::limit(2)
            ->where('kategori','true')
            ->get();
        $listkegiatan = Info::limit(4)
            ->where('kategori','false')
            ->get();
        $listbeasiswa = Info::limit(3)
            ->where('kategori','true')
            ->get();
        return view("beranda",[
            'listinfo' => $listinfo,
            'listkegiatan'=> $listkegiatan,
            'listbeasiswa'=> $listbeasiswa
        ]);
    }
}
