<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\ShowTweets;
use App\Http\Controllers\HqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RespostaController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Hq\PageController;
use App\Http\Controllers\Admin\Hq\ChapterController;
use App\Http\Controllers\Admin\Forum\CategoryController;

//ROTAS DE AUTENTICAÇÃO
Auth::routes();

//PAGINAS SOUSAPO
Route::get('/', [HomeController::class, 'index'])->name('sousapo.index');
Route::view('/apoio', 'pages.apoio')->name('sousapo.apoio');
Route::view('/sobre', 'pages.sobre')->name('sousapo.sobre');
Route::view('/artes', 'pages.artes')->name('sousapo.artes');

//QUADRINHOS
Route::prefix('/quadrinhos')->group(function () {
    Route::get('/', [HqController::class, 'quadrinhos'])->name('sousapo.quadrinhos');
    Route::get('/capitulo/{chapter_number}', [HqController::class, 'show'])->name('sousapo.ler')->middleware('auth');
});

//PAINEL ADMINISTRATIVO
Route::group(['prefix' => 'admin', 'middleware' => 'is_admin'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.index');
    //CRUDS
    Route::resource('/pages',     PageController::class);
    Route::resource('/chapters',  ChapterController::class);
    Route::resource('/categoria', CategoryController::class);
    //DELETES
    Route::get('/pages/delete/{page}',         [PageController::class,     'destroy'])->name('pages.delete');
    Route::get('/chapters/delete/{chapter}',   [ChapterController::class,  'destroy'])->name('chapters.delete');
    Route::get('/categoria/delete/{categoria}',[CategoryController::class, 'destroy'])->name('categoria.delete');
});

//ROTAS AUTENTICADAS
Route::middleware('auth')->group(function() {
    //MINHA CONTA
    Route::prefix('conta')->group(function () {
        Route::view('/', 'pages.conta')->name('conta.index');
        Route::post('/photo',  [UserController::class, 'storagePhoto'])->name('conta.photo');
        Route::post('/update', [UserController::class, 'Updateprofile'])->name('conta.update');
    });
    //FÓRUM
    Route::prefix('forum')->group(function () {
        Route::get('/', ShowTweets::class)->name('forum.index');
        Route::get('/show/{id}',     [ShowTweets::class, 'show'])->name('forum.show');
        Route::get('/resposta/{id}', [RespostaController::class, 'RespostaTweet'])->name('forum.resposta');
    });
});
