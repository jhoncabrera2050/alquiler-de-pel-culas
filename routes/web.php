<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usuarios\RentaController;
use App\Http\Controllers\Usuarios\PeliculaController;


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
    return view('welcome');
});

Route::get('list',[RentaController::class,'showData']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::group(['middleware' => 'auth'], function() {
    Route::group(['middleware' => 'role:usuarios', 'prefix' => 'usuarios', 'as' => 'usuarios.'], function() {
        Route::resource('cliente', \App\Http\Controllers\Usuarios\UsuarioController::class);
    });

    Route::group(['middleware' => 'role:usuarios', 'prefix' => 'usuarios', 'as' => 'usuarios.'], function() {
        Route::resource('membresia', \App\Http\Controllers\Usuarios\MembresiaController::class);
    });

    Route::group(['middleware' => 'role:usuarios', 'prefix' => 'usuarios', 'as' => 'renta.'], function() {
        Route::resource('usuarios', \App\Http\Controllers\Renta\RentaController::class);
    });

    Route::group(['middleware' => 'role:usuarios', 'prefix' => 'usuarios', 'as' => 'usuamembresia.'], function() {
        Route::resource('membresia', \App\Http\Controllers\UsuaMembresia\MembresiaController::class);
    });

    Route::group(['middleware' => 'role:usuarios', 'prefix' => 'usuarios', 'as' => 'usuariopelicula.'], function() {
        Route::resource('pelicula', \App\Http\Controllers\UsuarioPelicula\PeliculaController::class);
    });

    Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function() {
        Route::resource('users', \App\Http\Controllers\Administrador\AdminController::class);
    });
    Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'adminrenta.'], function() {
        Route::resource('administrador', \App\Http\Controllers\AdminRenta\RentaAdminController::class);
    });

    Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'adminmembresia.'], function() {
        Route::resource('membresia', \App\Http\Controllers\AdminMembresia\AdminMembresiaController::class);
    });


});
route::get('pelicula',[PeliculaController::class,'pelicula'])->name('pelicula');
route::get('alquilar',[PeliculaController::class,'alquilar'])->name('alquilar');
route::get('renta',[PeliculaController::class,'renta'])->name('renta');
route::get('add-to-renta/{ide}',[PeliculaController::class,'addtorenta'])->name('addtorenta');
route::get('detalle/{ide}',[PeliculaController::class,'detalle'])->name('detalle');
route::get('comprando/{ide}',[PeliculaController::class,'comprando'])->name('comprando');

route::post('guardarhoy',[PeliculaController::class,'guardarhoy'])->name('guardarhoy');


route::get('agregar/{ide}',[PeliculaController::class,'agregar'])->name('agregar');

