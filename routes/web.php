<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerEmpleados;

Route::get('/', function () {
    return view('index');
});

Route::get('/empleados',[ControllerEmpleados::class,'index'])->name('empleados');