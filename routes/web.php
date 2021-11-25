<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\ShowTweets;
use App\Http\Controllers\HqController;
use App\http\Controllers\ArteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RespostaController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Hq\PageController;
use App\Http\Controllers\Admin\Hq\ChapterController;
use App\Http\Controllers\Admin\Forum\CategoryController;

//ROTA DE AUTENTICAÇÃO
Auth::routes();

//ROTAS QUE NÃO PRECISAM LOGIN
Route::name('sousapo.')->group(function () {
    Route::get('/',           [HomeController::class, 'index'])->name('index'); //PAGINA PRINCIPAL
    Route::get('/quadrinhos', [HqController::class, 'quadrinhos'])->name('quadrinhos'); //QUADRINHOS
    Route::get('forum',      ShowTweets::class)->name('forum'); //FÓRUM
    Route::view('/sobre',     'pages.sobre')->name('sobre'); //SOBRE
    Route::resource('/artes', ArteController::class); //ARTES DA COMUNIDADE
});

//ROTAS QUE PRECISAM DE LOGIN
Route::middleware('auth')->group(function () {
    //ROTAS DA CONTA
    Route::group(['prefix' => 'conta', 'as' => 'conta.'], function () {
        Route::get('/',                 [ArteController::class, 'conta'])->name('index');
        Route::post('/photo',           [UserController::class, 'storagePhoto'])->name('photo');
        Route::post('/update',          [UserController::class, 'Updateprofile'])->name('update');
        Route::get('/galeria',          [ArteController::class, 'artes'])->name('galeria');
        Route::get('/arte/delete/{id}', [ArteController::class, 'destroy'])->name('arte.delete');
    });
    //ROTAS DO FÓRUM
    Route::group(['prefix' => 'forum', 'as' => 'forum.'], function () {
        Route::post('/create',       [ShowTweets::class, 'create'])->name('create');
        Route::get('/show/{id}',     [RespostaController::class, 'show'])->name('show');
        Route::get('/resposta/{id}', [RespostaController::class, 'RespostaTweet'])->name('resposta');
    });
    //ROTAS DOS QUADRINHOS
    Route::get('/capitulo/{chapter_number}', [HqController::class, 'show'])->name('sousapo.ler');
});

//ROTAS DO ADMIN
Route::group(['prefix' => 'admin', 'middleware' => 'is_admin'], function () {
    //DASHBOARD
    Route::get('/', [DashboardController::class, 'index'])->name('admin.index');
    //RESOURCES
    Route::resource('/pages',     PageController::class);
    Route::resource('/chapters',  ChapterController::class);
    Route::resource('/categoria', CategoryController::class);
    //DELETES
    Route::get('/pages/delete/{page}',       [PageController::class,     'destroy'])->name('pages.delete');
    Route::get('/chapters/delete/{chapter}', [ChapterController::class,  'destroy'])->name('chapters.delete');
    Route::get('/categoria/delete/{id}',     [CategoryController::class, 'destroy'])->name('categoria.delete');
});
