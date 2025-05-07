<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;

Route::controller(BarangController::class)
    ->name('barang.')
    ->prefix('/barang')
    ->group(function (){
        Route::get('/', 'index')->name('index');
        Route::get('/create','create')->name('create');
        Route::get('/{id}','show')->name('show');
        Route::post('/','store')->name('store');
    });

route::get('/hello/{nama}', function ($nama) {
    return view('hello-nama', ['nama' => $nama]);
});

Route::controller(HelloController::class)
    ->name('hello.')
    ->group(function () {
    Route::get('/hello-vip/{nama}', 'helloVIP');   
    Route::get('/hello/{nama}','helloNama');
    Route::get('/hello','hello');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/', function () {
    return view('welcome');
});