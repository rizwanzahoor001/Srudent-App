<?php

use App\Http\Controllers\StudentController;
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

Route::get('/',[StudentController::class,'index'])->name('index');
Route::get('create',[StudentController::class,'create'])->name('create');
Route::post('create',[StudentController::class,'store']);
Route::get('{student}/edit',[StudentController::class,'edit'])->name('edit');
Route::post('{student}/edit', [StudentController::class, 'update']);
Route::get('{student}/destroy', [StudentController::class, 'destroy'])->name('destroy');

