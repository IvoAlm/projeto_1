<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::post( '/',[TaskController::class,'store'])->name('store');
Route::post('/',[TaskController::class,'update'])->name('update');

Route::get('/create',[TaskController::class,'create'])->name('create') ;
Route::get('/',[TaskController::class,'show'])->name('tasks');
Route::get('/edit/{task}',[TaskController::class,'edit'])->name('edit');

