<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerCurso extends Controller
{
    public function curso(){
        return view('curso');
    }
}