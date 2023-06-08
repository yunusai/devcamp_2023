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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/form', [PesertaController::class, 'form'])->name('form');
Route::post('/create', [PesertaController::class, 'create'])->name('create');

Route::get('/daftar', [PesertaController::class, 'daftar'])->name('daftar');

Route::get('/editdata/{id}', [PesertaController::class, 'showid'])->name('editdata');
Route::get('/updatedata/{id}', [PesertaController::class, 'update'])->name('updatedata');

Route::get('/deletedata/{id}', [PesertaController::class, 'delete'])->name('deletedata');
