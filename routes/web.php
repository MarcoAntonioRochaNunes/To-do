<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
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

Route::get('/', [HomeController::class,'index'])->name('index');

Route::post('/task/new', [TaskController::class,'create'])->name('task.create');
Route::post('/task/new', [TaskController::class,'create'])->name('task.create');


Route::get('/login', [AuthController::class,'index'])->name('home.login');
Route::get('/register', [AuthController::class,'register'])->name('register');

