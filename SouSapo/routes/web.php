<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Hq\UploadController;
use App\Http\Controllers\Hq\HqController;
use App\Http\Controllers\Admin\DashboardController;


//PARTE DINÂMICA DAS ROTAS
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

//VIEWS SOUSAPO
Route::view('/', 'pages.index')->name('sousapo.index');
Route::view('/apoio', 'pages.apoio')->name('sousapo.apoio');
Route::view('/forum', 'pages.forum')->name('sousapo.forum');
Route::view('/conta', 'pages.conta')->name('sousapo.conta');
Route::view('/sobre', 'pages.sobre')->name('sousapo.sobre');
Route::view('/comunidade', 'pages.comunidade')->name('sousapo.comunidade');
Route::view('/cadastrar', 'pages.cadastrar')->name('sousapo.cadastrar');
Route::get('/capitulos', [HqController::class, 'capitulos'])->name('sousapo.capitulos');
Route::view('/lendo', 'pages.ler')->name('sousapo.ler');

//DASHBOARD
Route::resource('/dashboard', DashboardController::class)->middleware('auth');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('sousapo.dashboard')->middleware('auth');

Route::resource('/hq', HqController::class)->middleware('auth');
Route::get('/dashboard/hq/delete/{id}', [HqController::class, 'destroy'])->name('hq.destroy')->middleware('auth');

//TESTES
Route::view('/form', 'admin.hq.upload.form');
Route::post('/upload', [UploadController::class, 'upload'])->name('upload');
