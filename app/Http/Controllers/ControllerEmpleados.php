<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerEmpleados extends Controller
{
    public function index(){
        return view('empleados');
    }
    public function index2(){
        return view('index');
    }
    public function agenda(){
        return view('agenda');
    }
}