<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ControllerAgenda;
use App\Http\Controllers\ControllerEntrevista;
use App\Http\Controllers\ControllerCurso;
use App\Http\Controllers\ControllerProductividad;
/*
|--------------------------------------------------------------------------
| CONTROLADOR PARA LOS PERMISOS
|--------------------------------------------------------------------------
*/
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\SocioController;

Route::get('/',function(){
  return view('auth.login');
});


/*
|--------------------------------------------------------------------------
| Rutas para los socios
|--------------------------------------------------------------------------
*/

Route::resource('socio', SocioController::class);






/*
|--------------------------------------------------------------------------
| Rutas para entrevistas
|--------------------------------------------------------------------------
*/
Route::get('buscador',[ControllerEntrevista::class,'buscador'])->name('buscador');
Route::get('entrevista',[ControllerEntrevista::class,'entrevista'])->name('entrevista');
Route::post('guardarentrevista',[ControllerEntrevista::class,'guardarentrevista'])->name('guardarentrevista');
Route::get('reporteentrevista',[ControllerEntrevista::class,'reporteentrevista'])->name('reporteentrevista');
Route::get('desactivaentrevista/{id_entrevista}',[ControllerEntrevista::class,'desactivaentrevista'])->name('desactivaentrevista');
Route::get('activarentrevista/{id_entrevista}',[ControllerEntrevista::class,'activarentrevista'])->name('activarentrevista');
Route::get('borraentrevista/{id_entrevista}',[ControllerEntrevista::class,'borraentrevista'])->name('borraentrevista');
Route::get('modificaentrevista/{id_entrevista}',[ControllerEntrevista::class,'modificaentrevista'])->name('modificaentrevista');
Route::post('guardacambios_entrevista',[ControllerEntrevista::class,'guardacambios_entrevista'])->name('guardacambios_entrevista');

/*
|--------------------------------------------------------------------------
| Rutas para los agenda
|--------------------------------------------------------------------------
*/
Route::get('agenda',[ControllerAgenda::class,'agenda'])->name('agenda');
Route::post('guardaragenda',[ControllerAgenda::class,'guardaragenda'])->name('guardaragenda');
Route::get('reporteagenda',[ControllerAgenda::class,'reporteagenda'])->name('reporteagenda');
Route::get('modificaagenda/{id_agenda}',[ControllerAgenda::class,'modificaagenda'])->name('modificaagenda');
Route::get('desactivaagenda/{id_agenda}',[ControllerAgenda::class,'desactivaagenda'])->name('desactivaagenda');
Route::get('activa_agenda/{id_agenda}',[ControllerAgenda::class,'activa_agenda'])->name('activa_agenda');
Route::get('borraAgenda/{id_agenda}',[ControllerAgenda::class,'borraAgenda'])->name('borraAgenda');
Route::get('modificaagenda/{id_agenda}',[ControllerAgenda::class,'modificaagenda'])->name('modificaagenda');
Route::post('guardacambiosAgenda',[ControllerAgenda::class,'guardacambiosAgenda'])->name('guardacambiosAgenda');

//CURSO
Route::get('/curso',[ControllerCurso::class,'curso'])->name('curso');
Route::get('/cursoformulario',[ControllerCurso::class,'cursoformulario'])->name('cursoformulario');
Route::post('/guardarcurso',[ControllerCurso::class,'guardarcurso'])->name('guardarcurso');



/*
|--------------------------------------------------------------------------
| Rutas para productividad
|--------------------------------------------------------------------------
*/
Route::get('productividad',[ControllerProductividad::class,'productividad'])->name('productividad');
Route::post('guardarproductividad',[ControllerProductividad::class,'guardarproductividad'])->name('guardarproductividad');
Route::get('reporteproductividad',[ControllerProductividad::class,'reporteproductividad'])->name('reporteproductividad');

// Route::get('desactivarproductividad/{id_productividad}',[ControllerProductividad::class,'desactivarproductividad'])->name('desactivarproductividad');

// Route::get('borraproductividad/{id_productividad}',[ControllerProductividad::class,'borraproductividad'])->name('borraproductividad');
// Route::get('activa_productividad/{id_productividad}',[Controllerproductividad::class,'activarproductividad'])->name('activarproductividad');
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();



/***PDF */
Route::get('vistaPrevia',[ControllerEntrevista::class,'vistaPrevia'])->name('vistaPrevia');
Route::get('imprimir',[ControllerEntrevista::class,'imprimir'])->name('imprimir');

/*
|--------------------------------------------------------------------------
| Rutas para persmisos y login
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => ['auth']], function(){
   Route::resource('roles', RolController::class);
   Route::resource('usuarios', UsuarioController::class);
  
 });

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| Rutas para los horarios
|--------------------------------------------------------------------------
*/

Route::resource('horarios',App\Http\Controllers\HorarioController::class);