<?php

use Illuminate\Support\Facades\Route;

//ROTAS PARA TODAS AS PAGINAS CRIADAS ATÉ ENTÃO

Route::get('/', function () {
    return view('sousapo/nikolas/index');
});

Route::get('/apoio', function () {
    return view('/sousapo/nikolas/apoio');
});

Route::get('/hq', function () {
    return view('/sousapo/nikolas/hq');
});

Route::get('/forum', function () {
    return view('/sousapo/kayky/forum');
});

Route::get('/conta', function () {
    return view('/sousapo/kayky/conta');
});

Route::get('/sobre', function () {
    return view('/sousapo/victor/sobre');
});

Route::get('/comunidade', function () {
    return view('/sousapo/victor/comunidade');
});

Route::get('/cadastrar', function () {
    return view('/sousapo/victor/cadastrar');
});

Route::get('/laravel', function () {
    return view('welcome');
});

//PARTE DINÂMICA DAS ROTAS

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
