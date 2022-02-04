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
Route::get('reporteempleado',[ControllerEmpleados::class,'reporteempleado'])->name('reporteempleado');
Route::get('desactivarempleado/{id_empleado}',[ControllerEmpleados::class,'desactivarempleado'])->name('desactivarempleado');
Route::get('activarempleado/{id_empleado}',[ControllerEmpleados::class,'activarempleado'])->name('activarempleado');
Route::get('borraempleado/{id_empleado}',[ControllerEmpleados::class,'borraempleado'])->name('borraempleado');
Route::get('modificaempleado/{id_empleado}',[ControllerEmpleados::class,'modificaempleado'])->name('modificaempleado');
Route::post('guardacambios',[ControllerEmpleados::class,'guardacambios'])->name('guardacambios');

//AGENDA
Route::get('agenda',[ControllerAgenda::class,'agenda'])->name('agenda');
Route::post('guardaragenda',[ControllerAgenda::class,'guardaragenda'])->name('guardaragenda');
Route::get('reporteagenda',[ControllerAgenda::class,'reporteagenda'])->name('reporteagenda');

//ENTREVISTAS
Route::get('entrevista',[ControllerEntrevista::class,'entrevista'])->name('entrevista');
Route::post('guardarentrevista',[ControllerEntrevista::class,'guardarentrevista'])->name('guardarentrevista');

//CURSO
Route::get('curso',[ControllerCurso::class,'curso'])->name('curso');
Route::post('guardacurso',[ControllerCurso::class,'guardacurso'])->name('guardacurso');

//PRODUCTIVIDAD
Route::get('productividad',[ControllerProductividad::class,'productividad'])->name('productividad');
Route::post('guardarproductividad',[ControllerProductividad::class,'guardarproductividad'])->name('guardarproductividad');
