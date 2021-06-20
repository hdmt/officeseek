<?php

use Illuminate\Support\Facades\Route;

/**
 * ユーザ画面
 */
Route::get('/', function () {
    // return view('welcome');
    $data = [
        'users' => \App\Models\User::all(),
    ];
    // dump($data);
    return view('home', $data);
});


/**
 * 管理画面
 */
Route::get('/dashboard', function () {
    $data = [
        'users' => \App\Models\User::all(),
    ];
    // dump($data);
    return view('dashboard', $data);
})->middleware(['auth'])->name('dashboard');


Route::get('/list/company', function () {
    $data = [
        'users' => \App\Models\UserDetail::all(),
    ];
    //  dump($data);
    return view('dashboard02', $data);
})->middleware(['auth']);

require __DIR__.'/auth.php';


/**
 * モック
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
