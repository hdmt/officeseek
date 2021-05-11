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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

/**
 * mock templates
 */
Route::get('/mock', function () {
    return view('mock/index');
});

Route::get('/mock/home', function () {
    return view('mock/home');
});

Route::get('/mock/detail', function () {
    return view('mock/detail');
});

Route::get('/mock/list', function () {
    return view('detail');
});

