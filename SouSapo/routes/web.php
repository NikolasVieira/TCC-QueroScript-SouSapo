<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HqController;
use App\Http\Controllers\HomeController;

//ROTAS PARA TODAS AS PAGINAS CRIADAS ATÉ ENTÃO

//PARTE DINÂMICA DAS ROTAS
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

//PARTE DO NIKOLAS
Route::resource('/hq', HqController::class );
Route::get('/capitulos', [HqController::class, 'index' ])->name('hq.index');

Route::get('/', function () {
    return view('sousapo/nikolas/index');
})->name('sousapo.index');

Route::get('/apoio', function () {
    return view('/sousapo/nikolas/apoio');
})->name('sousapo.apoio');

//PARTE DO KAYKY
Route::get('/forum', function () {
    return view('/sousapo/kayky/forum');
})->name('sousapo.forum');

Route::get('/conta', function () {
    return view('/sousapo/kayky/conta');
})->middleware('auth')->name('sousapo.conta');

//PARTE DO VICTOR
Route::get('/sobre', function () {
    return view('/sousapo/victor/sobre');
})->name('sousapo.sobre');

Route::get('/comunidade', function () {
    return view('/sousapo/victor/comunidade');
})->name('sousapo.comunidade');

Route::get('/cadastrar', function () {
    return view('/sousapo/victor/cadastrar');
})->name('sousapo.cadastrar');

//PARTE GERAL
Route::get('/laravel', function () {
    return view('welcome');
});
