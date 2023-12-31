<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('example', [App\Http\Controllers\HomeController::class, 'example'])->name('example');
Route::get('tahun', [App\Http\Controllers\TahunController::class, 'index'])->name('tahun');
Route::get('/get_tahun', [App\Http\Controllers\TahunController::class, 'get_tahun'])->name('get_tahun');
Route::get('/menu', [App\Http\Controllers\MenuController::class, 'index'])->name('menu');
Route::get('/get_2021', [App\Http\Controllers\MenuController::class, 'get_2021'])->name('get_2021');
