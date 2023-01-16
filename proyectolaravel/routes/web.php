<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RelacionmenuController;
use App\Http\Controllers\ControllersController;
use App\Http\Controllers\RelacionesController;

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

//Usuarios
Route::get('/usuarios', function () {
    return view('usuarios.index');
});

//Route::get('usuarios/create', [UsuariosController::class,'create']);

Route::resource('usuarios',UsuariosController::class);

//roles
Route::resource('roles',RolesController::class);

//Controller
Route::resource('controllers',ControllersController::class);

//menu
Route::resource('menus',MenuController::class);

//relacionmenus
Route::resource('relacion',RelacionesController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
