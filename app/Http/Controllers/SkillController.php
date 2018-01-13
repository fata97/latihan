<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillController extends Controller
{
    //
    public function index() {
        return view('skill/index');
    }

    public function create_skill(){
        return view('skill/create_skill');
    }

    public function create_softskill(){
        return view('skill/create_softskill');
    }

    public function edit(){
        return view('skill/edit_softskill');
    }

}
