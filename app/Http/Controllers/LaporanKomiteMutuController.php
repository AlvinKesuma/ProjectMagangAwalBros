<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanKomiteMutuController extends Controller
{
    public function form()
    {
        return view('laporan_komite_mutu.form');
    }
}
