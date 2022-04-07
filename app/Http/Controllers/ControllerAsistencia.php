<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerAsistencia extends Controller
{
    public function index()
    {
        return view('asistencia.index');
    }
    public function index2()
    {
        return view('asistencia.index2');
    }
}
