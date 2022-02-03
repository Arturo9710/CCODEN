<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerProductividad extends Controller
{
    public function productividad(){
        return view('productividad.productividad');
    }
}