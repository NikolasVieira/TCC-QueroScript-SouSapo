<?php
use Illuminate\Support\Facades\Route;

use App\Http\Livewire\ShowTweets;
use App\Http\Controllers\HqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RespostaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Hq\PageController;
use App\Http\Controllers\Admin\Hq\ChapterController;

//ROTAS DE AUTENTICAÇÃO
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

//PAGINAS SOUSAPO
Route::view('/',           'pages.index')->name('sousapo.index');
Route::view('/apoio',      'pages.apoio')->name('sousapo.apoio');
Route::view('/sobre',      'pages.sobre')->name('sousapo.sobre');
Route::view('/comunidade', 'pages.comunidade')->name('sousapo.comunidade');

//PAINEL ADMINISTRATIVO
Route::prefix('/admin')->group( function(){
    Route::get('/', [DashboardController::class, 'index'])->name('admin.index')->middleware('auth');
    Route::resource('/pages', PageController::class)->middleware('auth');
    Route::resource('/chapters', ChapterController::class)->middleware('auth');
    Route::get('/pages/delete/{page}', [PageController::class, 'destroy'])->name('pages.delete');
    Route::get('/chapters/delete/{chapter}', [ChapterController::class, 'destroy'])->name('chapters.delete');
});

//QUADRINHOS
Route::prefix('/quadrinhos')->group( function(){
    Route::get('/',  [HqController::class, 'quadrinhos'])->name('sousapo.quadrinhos');
    Route::get('/lendo/capitulo/{chapter_number}',  [HqController::class, 'show'])->name('sousapo.ler');
});

//MINHA CONTA
Route::prefix('/conta')->group( function(){
    Route::view('/', 'pages.conta')->name('sousapo.conta')->middleware('auth');
    Route::post('/update', [UserController::class , 'Updateprofile'] )->name('sousapo.conta-update');
    Route::post('/photo',  [UserController::class , 'storagePhoto'] )->name('sousapo.conta-photo');
});

//FÓRUM
Route::prefix('/forum')->group( function(){
    Route::get('/' ,             ShowTweets::class)->name('forum')->middleware('auth');
    Route::get('/show/{id}',     [ShowTweets::class , 'show'])->name('sousapo.forum-show')->middleware('auth');
    Route::get('/resposta/{id}', [RespostaController::class , 'RespostaTweet'])->name('sousapo.forumresposta')->middleware('auth');
});

//CATEGORIA
Route::prefix('/categoria')->group( function(){
    Route::resource('/', CategoriaController::class)->middleware('auth');
    Route::get('/delete/{id}', [CategoriaController::class, 'destroy'])->middleware('auth')->name('delete');
});