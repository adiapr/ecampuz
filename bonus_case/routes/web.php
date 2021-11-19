<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstansiController;

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

// Route::get('/',         [InstansiController::class, 'index']);


Auth::routes();

Route::get('/',                 [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home',                 [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home/add',            [InstansiController::class, 'add'])->name('instansi.add');
Route::post('/home/delete/{id}',    [InstansiController::class, 'delete'])->name('instansi.delete');
Route::post('/home/update/{id}',    [InstansiController::class, 'update'])->name('instansi.update');

Route::post('/home/search',         [InstansiController::class, 'search'])->name('instansi.search');
