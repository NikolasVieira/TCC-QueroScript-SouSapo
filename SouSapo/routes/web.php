<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use PhpParser\Node\Stmt\Return_;

//PARTE DINÂMICA DAS ROTAS
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

//VIEWS SOUSAPO
Route::view('/', 'sousapo.telas.index')->name('sousapo.index');
Route::view('/apoio', 'sousapo.telas.apoio')->name('sousapo.apoio');
Route::view('/forum', 'sousapo.telas.forum')->name('sousapo.forum');
Route::view('/conta', 'sousapo.telas.conta')->name('sousapo.conta');
Route::view('/sobre', 'sousapo.telas.sobre')->name('sousapo.sobre');
Route::view('/comunidade', 'sousapo.telas.comunidade')->name('sousapo.comunidade');
Route::view('/cadastrar', 'sousapo.telas.cadastrar')->name('sousapo.cadastrar');
Route::get('/capitulos', [HqController::class, 'capitulos' ])->name('sousapo.capitulos');
Route::view('/lendo', 'sousapo.telas.ler')->name('sousapo.ler');

//DASHBOARD
Route::resource('/dashboard', DashboardController::class)->middleware('auth');
Route::resource('/hq', HqController::class )->middleware('auth');
Route::get('/dashboard', [DashboardController::class, 'index' ])->name('sousapo.dashboard')->middleware('auth');
Route::get('/dashboard/hq/delete/{id}', [HqController::class, 'destroy' ])->name('hq.destroy')->middleware('auth');

//TESTES
Route::view('/form','sousapo.upload.form');
Route::post('/upload', [UploadController::class, 'upload' ])->name('upload');
