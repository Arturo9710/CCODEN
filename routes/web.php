<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerEmpleados;

Route::get('/', function () {
    return view('index');
});

Route::get('/empleados',[ControllerEmpleados::class,'index'])->name('empleados');
Route::get('/empleados2',[ControllerEmpleados::class,'index2'])->name('empleados2');
Route::get('/agenda',[ControllerEmpleados::class,'agenda'])->name('agenda');