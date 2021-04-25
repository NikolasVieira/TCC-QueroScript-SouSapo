<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HqController;
use App\Http\Controllers\HomeController;

//ROTAS PARA TODAS AS PAGINAS CRIADAS ATÉ ENTÃO

//PARTE DINÂMICA DAS ROTAS
Auth::routes();
Route::get('/home',                              [HomeController::class, 'index'])->name('home');

//PARTE DO NIKOLAS
Route::get('/capitulos',                         [HqController::class, 'index' ])->name('hq.index');
Route::get('/hq/criar',                         [HqController::class, 'create'])->name('hq.create');
Route::post('/hq/guardando',                     [HqController::class, 'store' ])->name('hq.store');
Route::post('/hq/editar/{id}',                   [HqController::class, 'edit'  ])->name('hq.edit');
Route::get('/ler/{chapter_number}/{page_number}',[HqController::class, 'show'  ])->name('hq.show');

Route::get('/', function () {
    return view('sousapo/nikolas/index');
});

Route::get('/apoio', function () {
    return view('/sousapo/nikolas/apoio');
});


//PARTE DO KAYKY
Route::get('/forum', function () {
    return view('/sousapo/kayky/forum');
});

Route::get('/conta', function () {
    return view('/sousapo/kayky/conta');
});

Route::get('/conta', function () {
    return view('/sousapo/kayky/conta');
});

//PARTE DO VICTOR
Route::get('/sobre', function () {
    return view('/sousapo/victor/sobre');
});

Route::get('/comunidade', function () {
    return view('/sousapo/victor/comunidade');
});

Route::get('/cadastrar', function () {
    return view('/sousapo/victor/cadastrar');
});

//PARTE GERAL
Route::get('/laravel', function () {
    return view('welcome');
});

//TESTES
Route::resource('/flipbook','rudrarajiv\flipbooklaravel\FlipBookController');
Route::get('/flipbook/create', function () {
    return view('rudrarajiv\flipbooklaravel\bookcreater');
});
