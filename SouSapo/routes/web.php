<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UploadController;

//PARTE DINÂMICA DAS ROTAS
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

//VIEWS SOUSAPO
Route::view('/', 'sousapo.index')->name('sousapo.index');
Route::view('/apoio', 'sousapo.apoio')->name('sousapo.apoio');
Route::view('/forum', 'sousapo.forum')->name('sousapo.forum');
Route::view('/conta', 'sousapo.conta')->name('sousapo.conta');
Route::view('/sobre', 'sousapo.sobre')->name('sousapo.sobre');
Route::view('/comunidade', 'sousapo.comunidade')->name('sousapo.comunidade');
Route::view('/cadastrar', 'sousapo.cadastrar')->name('sousapo.cadastrar');

//ROTAS HQ
Route::resource('/hq', HqController::class );
Route::get('/capitulos', [HqController::class, 'index' ])->name('hq.index');
Route::get('hq/delete/{id}', [HqController::class, 'destroy' ])->name('hq.destroy');

//TESTES
Route::view('form','sousapo.upload.form');
Route::post('upload', [UploadController::class, 'upload' ])->name('upload');
