<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Hq\PageController;
use App\Http\Controllers\Admin\Hq\UploadController;
use App\Http\Controllers\Admin\Hq\ChapterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RespostaController;
use App\Http\Livewire\ShowTweets;

//ROTAS DE AUTENTICAÇÃO
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

//RESOURCES


//PAINEL ADMINISTRATIVO
Route::prefix('/admin')->group( function(){
    Route::get('/', [DashboardController::class, 'index'])->name('admin.index')->middleware('auth');
    Route::resource('/pages',      PageController::class)->middleware('auth');
    Route::resource('/chapters',   ChapterController::class)->middleware('auth');
});

//DELETES
Route::get('/chapter/delete/{id}',  [ChapterController::class, 'destroy'])->name('chapter.destroy')->middleware('auth');
Route::get('/page/delete/{id}',     [PageController::class, 'destroy'])->name('page.destroy')->middleware('auth');

//VIEWS SOUSAPO
Route::view('/',           'pages.index')->name('sousapo.index');
Route::view('/apoio',      'pages.apoio')->name('sousapo.apoio');
Route::view('/sobre',      'pages.sobre')->name('sousapo.sobre');
Route::view('/comunidade', 'pages.comunidade')->name('sousapo.comunidade');
Route::view('/cadastrar',  'pages.cadastrar')->name('sousapo.cadastrar');
Route::get('/lendo/{id}',  [HqController::class, 'show'])->name('sousapo.ler');
Route::get('/quadrinhos',  [HqController::class, 'quadrinhos'])->name('sousapo.quadrinhos');

//TESTES
Route::view('/form',    'admin.hq.upload.form');
Route::post('/upload',  [UploadController::class, 'upload'])->name('upload');
Route::post('/conta-update', [UserController::class , 'Updateprofile'] )->name('sousapo.conta-update');
Route::post('/conta-photo', [UserController::class , 'storagePhoto'] )->name('sousapo.conta-photo');
Route::view('/conta', 'pages.conta')->name('sousapo.conta')->middleware('auth');


route::get('forum' , ShowTweets::class)->name('forum')->middleware('auth');
Route::get('forum/show/{id}', [ShowTweets::class , 'show'])->name('sousapo.forum-show')->middleware('auth');
Route::get('forum/resposta/{id}', [RespostaController::class , 'RespostaTweet'])->name('sousapo.forumresposta')->middleware('auth');
