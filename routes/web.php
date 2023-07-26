<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
use Illuminate\Pagination\Cursor;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
* NOTA: Es importante mencionar que laravel lee
* las rutas de arriba hacia abajo. Por lo tanto las rutas
* que están arriba tiene prioridad sobre las de abajo.
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/bienvenido', HomeController::class);
//Laravel 8. Así se llama a un controlador
/*
Route::controller(CursoController::class)->group(function(){
    Route::get('/cursos', 'index')->name('cursos.index');
    Route::get('/cursos/create', 'create')->name('cursos.create');
    Route::post('/cursos', 'store')->name('cursos.store');
    Route::get('/cursos/{curso}', 'show')->name('cursos.show');
    Route::get('/cursos/{curso}/edit', 'edit')->name('cursos.edit');
    Route::put('/cursos/{curso}', 'update')->name('cursos.update');
    Route::delete('/cursos/{curso}', 'destroy')->name('cursos.destroy');
});
*/
Route::resource('cursos', CursoController::class);
/*
*Otra manera de optimizar los rutas
*Si de repente piden cambiar el nombre de la url y también modificar AppServiceProvider
*Route::resource('asignatura', CursoController::class)->parameters(['asignaturas' => 'curso'])->names('cursos')
*/
/*----------OJO----------
//Para laravel 7 cuando se llama un controlador se hace de la siguiente manera
//Route::get('/cursos', 'CursoController@index');
//Revisar App->Providers->RouteServiceProvider.php
--------------------*/

/*
Este es un opcion
Route::get('/cursos/{curso}', function ($curso) {
    return ("Bienvenido al curso: $curso");
});
Route::get('/cursos/{curso}/{categoria}', function ($curso, $categoria) {
    return ("Bienvenido al curso $curso, de la categoria $categoria");
});
*/


//Este otra opcion. El ? hace que categoria sea opcional
/*
Route::get('/cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
    if($categoria){
        return ("Bienvenido al curso $curso, de la categoria $categoria");
    }else{
        return "Bienvenido al curso: $curso";
    }
});
*/