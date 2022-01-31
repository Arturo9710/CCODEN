<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerEmpleados;
use App\Http\Controllers\ControllerAgenda;
use App\Http\Controllers\ControllerEntrevista;
use App\Http\Controllers\ControllerCurso;
use App\Http\Controllers\ControllerProductividad;

Route::get('/', function () {
    return view('index');
});

//EMPLEADOS
Route::get('empleados',[ControllerEmpleados::class,'empleados'])->name('empleados');
Route::post('guardarempleado',[ControllerEmpleados::class,'guardarempleado'])->name('guardarempleado');
Route::get('eloquent',[ControllerEmpleados::class,'eloquent'])->name('eloquent');

//AGENDA
Route::get('agenda',[ControllerAgenda::class,'agenda'])->name('agenda');
Route::post('guardaragenda',[ControllerAgenda::class,'guardaragenda'])->name('guardaragenda');

//ENTREVISTAS
Route::get('entrevista',[ControllerEntrevista::class,'entrevista'])->name('entrevista');
Route::post('guardarentrevista',[ControllerEntrevista::class,'guardarentrevista'])->name('guardarentrevista');

//CURSO
Route::get('curso',[ControllerCurso::class,'curso'])->name('curso');
Route::post('guardacurso',[ControllerCurso::class,'guardacurso'])->name('guardacurso');

//PRODUCTIVIDAD
Route::get('productividad',[ControllerProductividad::class,'productividad'])->name('productividad');
Route::post('guardarproductividad',[ControllerProductividad::class,'guardarproductividad'])->name('guardarproductividad');


