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

//QUADRINHOS
Route::prefix('/quadrinhos')->group( function(){
    Route::get('/',  [HqController::class, 'quadrinhos'])->name('sousapo.quadrinhos');
    Route::get('/capitulo/{chapter_number}',  [HqController::class, 'show'])->name('sousapo.ler')->middleware('auth');
});

//PAINEL ADMINISTRATIVO
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.index');
    Route::resource('/pages', PageController::class);
    Route::resource('/chapters', ChapterController::class);
    Route::resource('/categoria', CategoriaController::class);
    Route::get('/pages/delete/{page}', [PageController::class, 'destroy'])->name('pages.delete');
    Route::get('/chapters/delete/{chapter}', [ChapterController::class, 'destroy'])->name('chapters.delete');
    Route::get('/categoria/delete/{id}', [CategoriaController::class, 'destroy'])->name('categoria.delete');
});

//MINHA CONTA
Route::group(['prefix' => 'conta', 'middleware' => 'auth'], function(){
    Route::view('/', 'pages.conta')->name('conta.index');
    Route::post('/update', [UserController::class , 'Updateprofile'] )->name('conta.update');
    Route::post('/photo',  [UserController::class , 'storagePhoto'] )->name('conta.photo');
});

//FÓRUM
Route::group(['prefix' => 'forum', 'middleware' => 'auth'], function(){
    Route::get('/' ,             ShowTweets::class)->name('forum.index');
    Route::get('/show/{id}',     [ShowTweets::class , 'show'])->name('forum.show');
    Route::get('/resposta/{id}', [RespostaController::class , 'RespostaTweet'])->name('forum.resposta');
});
