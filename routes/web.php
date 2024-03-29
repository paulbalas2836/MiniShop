<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('', [App\Http\Controllers\LoginController::class, 'index'])->name('');
Route::get('/register', [App\Http\Controllers\RegisterController::class, 'index'])->name('register');
Route::get('/mylist', [App\Http\Controllers\MyListController::class, 'index'])->name('mylist');