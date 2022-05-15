<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrkController;

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
})->name('dashboard');

Route::get('/prk', function () {
    return view('prk');
})->name('prk');

Route::get('/prk/baru', [PrkController::class, 'create'])->name('prk.create');
