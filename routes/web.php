<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'TryLogin']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'TryRegis']);
Route::get('/logout', [LoginController::class, 'TryLogout']);
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/buy', [HomeController::class, 'store'])->name('buy');
Route::get('/cart/{id}', [CartController::class, 'Erase'])->name('delete');
Route::get('/home/{itemID}', [HomeController::class, 'show'])->name('item.show');

