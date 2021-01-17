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

Route::get('/create',[TaskController::class,'create'])->name('create') ;
Route::post( '/store',[TaskController::class,'store'])->name('store');

Route::get('/',[TaskController::class,'show'])->name('tasks');

