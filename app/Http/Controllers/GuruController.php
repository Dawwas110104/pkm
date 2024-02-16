<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        return view('guru.index');
    }

    public function materi()
    {
        return view('guru.materi');
    }

    public function siswa()
    {
        return view('guru.siswa');
    }
}
