<?php

use App\Http\Controllers\CorController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ModeloController;
use App\Http\Controllers\CarroController;
use App\Http\Controllers\HomeController;
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
    return view('welcome');
});

//home
Route::get('/home', [HomeController::class, 'index'])->name('home.index');

//cor
Route::get('/cor', [CorController::class, 'index'])->name('cor.index');
Route::get('/cor/criar', [CorController::class, 'create'])->name('cor.create');
Route::get('/cor/excluir/{id}', [CorController::class, 'destroy'])->name('cor.destroy');
Route::get('/cor/salvar', [CorController::class, 'store'])->name('cor.store');


//marca
Route::get('/marca', [MarcaController::class, 'index'])->name('marca.index');
Route::get('/marca/criar', [MarcaController::class, 'create'])->name('marca.create');
Route::get('/marca/excluir/{id}', [MarcaController::class, 'destroy'])->name('marca.destroy');
Route::get('/marca/salvar', [MarcaController::class, 'store'])->name('marca.salvar');

//marca
Route::get('/modelo', [ModeloController::class, 'index']);
Route::get('/modelo/criar', [ModeloController::class, 'create']);
Route::get('/modelo/excluir/{id}', [ModeloController::class, 'destroy'])->name('modelo.destroy');
Route::get('/modelo/salvar', [ModeloController::class, 'store']);

