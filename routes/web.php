<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

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

Route::get('/', [PageController::class, 'home'])->name('home');
    
Route::get('/users', [PageController::class, 'index'])->name('index');

Route::resource('posts', PostController::class);

Route::get('/dashboard/posts',[PostController::class, 'dashboard'])->name('dashboard');