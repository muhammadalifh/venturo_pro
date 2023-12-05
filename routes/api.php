<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::get('/get_tahun', [App\Http\Controllers\TahunController::class, 'get_tahun'])->name('get_tahun');

Route::get('/menu-list', \App\Http\Controllers\Api\MenuListController::class)->name('menu-list');
Route::get('/transaction-list', \App\Http\Controllers\Api\TransactionListController::class)->name('transaction-list');
