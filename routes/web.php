<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MataKuliahController;
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
    return view('welcome');
});

Route::get('/profile/{nama}/{NPM}/{class}',[ProfileController::class,'profile']);

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user', [UserController::class, 'store'])->name('user.store');
Route::get('/matakuliah', [MataKuliahController::class, 'index'])->name('mata-kuliah.index');
Route::get('/matakuliah/create', [MataKuliahController::class, 'create'])->name('mata-kuliah.create');
Route::post('/matakuliah/store', [MataKuliahController::class, 'store'])->name('mata-kuliah.store');
Route::get('/mata-kuliah/{id}/edit', [MataKuliahController::class, 'edit'])->name('mata-kuliah.edit');
Route::put('/mata-kuliah/{id}', [MataKuliahController::class, 'update'])->name('mata-kuliah.update');
Route::delete('/mata-kuliah/{id}', [MataKuliahController::class, 'destroy'])->name('mata-kuliah.destroy');


