<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //
    public function index() {
        return view('siswa/index');
    }

    public function create(){
        return view('siswa/create');
    }

    public function edit(){
        return view('siswa/edit');
    }

    public function detail(){
        return view('siswa/detail');
    }

}
