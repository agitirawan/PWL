<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index()
    {
        $nama = 'Agit Ari';
        $materi = ["Web Design", "Web Programming", "Digital                    
         Marketing", "Graphic Design"];
        return view('biodata', ['nama' => $nama, 'materi' =>
        $materi]);
    }
}
