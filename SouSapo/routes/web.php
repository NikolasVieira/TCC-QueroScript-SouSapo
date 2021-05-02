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
Route::get('hq/delete/{id}', [HqController::class, 'destroy' ])->name('hq.destroy');

Route::get('/', function () {
    return view('/sousapo/index');
})->name('sousapo.index');

Route::get('/apoio', function () {
    return view('/sousapo/apoio');
})->name('sousapo.apoio');

//PARTE DO KAYKY
Route::get('/forum', function () {
    return view('/sousapo/forum');
})->name('sousapo.forum');

Route::get('/conta', function () {
    return view('/sousapo/conta');
})->middleware('auth')->name('sousapo.conta');

//PARTE DO VICTOR
Route::get('/sobre', function () {
    return view('/sousapo/sobre');
})->name('sousapo.sobre');

Route::get('/comunidade', function () {
    return view('/sousapo/comunidade');
})->name('sousapo.comunidade');

Route::get('/cadastrar', function () {
    return view('/sousapo/cadastrar');
})->name('sousapo.cadastrar');
