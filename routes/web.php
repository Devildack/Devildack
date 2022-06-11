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

Route::get('/register',[App\Http\Controllers\Auth\RegisterController::class, 'register_page'])->name('register');
Route::get('/',[App\Http\Controllers\HomeController::class, 'index']);
Route::get('/contact',[App\Http\Controllers\HomeController::class, 'contact']);
Route::post('/register',[App\Http\Controllers\Auth\RegisterController::class, 'register']);