<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesertaController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('form');
});

Route::get('/form', [PesertaController::class, 'form'])->name('form');
Route::post('/create', [PesertaController::class, 'create'])->name('create');

Route::get('/editdata/{id}', [PesertaController::class, 'getid'])->name('editdata');
Route::get('/update/{id}', [PesertaController::class, 'update'])->name('update');

Route::get('/delete/{id}', [PesertaController::class, 'delete'])->name('delete');

Route::get('/daftar', [PesertaController::class, 'daftar'])->name('daftar');
