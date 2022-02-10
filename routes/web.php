<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerEmpleados;
use App\Http\Controllers\ControllerAgenda;
use App\Http\Controllers\ControllerEntrevista;
use App\Http\Controllers\ControllerCurso;
use App\Http\Controllers\ControllerProductividad;

Route::get('/',function(){
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

//ENTREVISTAS
Route::get('entrevista',[ControllerEntrevista::class,'entrevista'])->name('entrevista');
Route::post('guardarentrevista',[ControllerEntrevista::class,'guardarentrevista'])->name('guardarentrevista');
Route::get('reporteentrevista',[ControllerEntrevista::class,'reporteentrevista'])->name('reporteentrevista');
Route::get('desactivaentrevista/{id_entrevista}',[ControllerEntrevista::class,'desactivaentrevista'])->name('desactivaentrevista');
Route::get('activarentrevista/{id_entrevista}',[ControllerEntrevista::class,'activarentrevista'])->name('activarentrevista');
Route::get('borraentrevista/{id_entrevista}',[ControllerEntrevista::class,'borraentrevista'])->name('borraentrevista');
Route::get('modificaentrevista/{id_entrevista}',[ControllerEntrevista::class,'modificaentrevista'])->name('modificaentrevista');
Route::post('guardacambios',[ControllerEntrevista::class,'guardacambios'])->name('guardacambios');

//AGENDA
Route::get('agenda',[ControllerAgenda::class,'agenda'])->name('agenda');
Route::post('guardaragenda',[ControllerAgenda::class,'guardaragenda'])->name('guardaragenda');
Route::get('reporteagenda',[ControllerAgenda::class,'reporteagenda'])->name('reporteagenda');
// Modifica Agenda
Route::get('modificaagenda/{id_agenda}',[ControllerAgenda::class,'modificaagenda'])->name('modificaagenda');
// Desactiva Agenda
Route::get('desactivaagenda/{id_agenda}',[ControllerAgenda::class,'desactivaagenda'])->name('desactivaagenda');
// Activa Agenda
Route::get('activa_agenda/{id_agenda}',[ControllerAgenda::class,'activa_agenda'])->name('activa_agenda');
// Borrar
Route::get('borraAgenda/{id_agenda}',[ControllerAgenda::class,'borraAgenda'])->name('borraAgenda');
// Modifica agendas
Route::get('modificaagenda/{id_agenda}',[ControllerAgenda::class,'modificaagenda'])->name('modificaagenda');
Route::post('guardacambiosAgenda',[ControllerAgenda::class,'guardacambiosAgenda'])->name('guardacambiosAgenda');


//CURSO
Route::get('curso',[ControllerCurso::class,'curso'])->name('curso');
Route::post('guardarcurso',[ControllerCurso::class,'guardarcurso'])->name('guardarcurso');



//PRODUCTIVIDAD
Route::get('productividad',[ControllerProductividad::class,'productividad'])->name('productividad');

Route::post('guardarproductividad',[ControllerProductividad::class,'guardarproductividad'])->name('guardarproductividad');

<<<<<<< HEAD
Route::get('reporteproductividad',[ControllerProductividad::class,'reporteproductividad'])->name('reporteproductividad');

Route::get('desactivarproductividad/{id_productividad}',[ControllerProductividad::class,'desactivarproductividad'])->name('desactivarproductividad');

Route::get('borraproductividad/{id_productividad}',[ControllerProductividad::class,'borraproductividad'])->name('borraproductividad');
Route::get('activa_productividad/{id_productividad}',[Controllerproductividad::class,'activarproductividad'])->name('activarproductividad');
=======
>>>>>>> 1845a5fe85d7ac2dc06d3715904c1d0702a92de0
