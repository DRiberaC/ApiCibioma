<?php

use App\Http\Controllers\BibliotecaController;
use App\Http\Controllers\DatosController;
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

Route::get('/', function () {
    return view('auth/login');
});
Route::group(['middleware' => ['auth']], function () {
    Route::get('home', [DatosController::class,"index"])->name('home.index');
    Route::get('registrar/{tipo}', [DatosController::class,"create"])->name('coleccion.create');
    Route::post('registrar', [DatosController::class,"store"])->name('coleccion.store');
    Route::get('editar/{muestra}', [DatosController::class,"edit"])->name('coleccion.edit');
    Route::post('actualizar', [DatosController::class,"update"])->name('coleccion.update');

    Route::get('biblioteca', [BibliotecaController::class,"index"])->name('biblioteca.index');
    Route::get('biblioteca/crear', [BibliotecaController::class,"create"])->name('biblioteca.create');
    Route::post('biblioteca/guardar', [BibliotecaController::class,"store"])->name('biblioteca.store');
    Route::get('biblioteca/editar/{libro}', [BibliotecaController::class,"edit"])->name('biblioteca.edit');
    Route::post('biblioteca/actualizar', [BibliotecaController::class,"update"])->name('biblioteca.update');
    Route::get('biblioteca/archivo/{libro}', [BibliotecaController::class,"archivo"])->name('biblioteca.archivo');
    Route::post('biblioteca/imagen/upload/{libro}', [BibliotecaController::class,"uploadImg"])->name('biblioteca.imagen.upload');
    Route::post('biblioteca/file/upload/{libro}', [BibliotecaController::class,"uoloadFile"])->name('biblioteca.file.upload');
    Route::post('coleccion/file/delete', [BibliotecaController::class,"deleteFile"])->name('biblioteca.file.delete');

    //biblioteca.file.delete


    Route::get('coleccion/imagen/{muestra}', [DatosController::class,"imagen"])->name('coleccion.imagen');
    Route::post('coleccion/imagen/upload/{muestra}', [DatosController::class,"uploadImg"])->name('coleccion.imagen.upload');
    Route::post('coleccion/imagen/delete', [DatosController::class,"deleteImg"])->name('coleccion.imagen.delete');
    Route::get('coleccion/{tipo}', [DatosController::class,"coleccion"])->name('coleccion.tipo');
});
Route::get('clearcache', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear ');
    Artisan::call('view:clear ');
    return "Cache is cleared";
});

Route::get('donwload/file/{libro}', [BibliotecaController::class,"downloadFile"])->name('biblioteca.file.download');
Route::get('donwload/image/{muestra}', [DatosController::class,"downloadImg"])->name('coleccion.imagen.download');
