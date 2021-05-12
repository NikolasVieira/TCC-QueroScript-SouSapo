<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\Admin\DashboardController;
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

//ROTAS HQ
Route::resource('dashboard/hq', HqController::class );
Route::get('/capitulos', [HqController::class, 'capitulos' ])->name('hq.capitulos');
Route::get('hq/delete/{id}', [HqController::class, 'destroy' ])->name('hq.destroy');

//DASHBOARD
Route::resource('/dashboard', DashboardController::class);
Route::get('/dashboard', [DashboardController::class, 'index' ])->name('sousapo.dashboard');

//TESTES
Route::view('form','sousapo.upload.form');
Route::post('upload', [UploadController::class, 'upload' ])->name('upload');
