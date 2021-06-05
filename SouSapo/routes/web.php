<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Hq\PageController;
use App\Http\Controllers\Admin\Hq\UploadController;
use App\Http\Controllers\Admin\Hq\ChapterController;
use App\Http\Controllers\ForumController;

//ROTAS DE AUTENTICAÇÃO
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

//RESOURCES
Route::resource('/page', PageController::class)->middleware('auth');
Route::resource('/chapter', ChapterController::class)->middleware('auth');
Route::resource('/dashboard', DashboardController::class)->middleware('auth');
Route::resource('/forum' , ForumController::class)->middleware('auth');
Route::get('forum/show/{id}', [ForumController::class, 'show']);





//DASHBOARD
Route::get('/dashboard', [DashboardController::class, 'index'])->name('sousapo.dashboard')->middleware('auth');
Route::get('/chapters', [ChapterController::class, 'index'])->name('dashboard.chapter')->middleware('auth');
Route::get('/pages', [PageController::class, 'index'])->name('dashboard.page')->middleware('auth');

//DELETES
Route::get('/chapter/delete/{id}', [ChapterController::class, 'destroy'])->name('chapter.destroy')->middleware('auth');
Route::get('/page/delete/{id}', [PageController::class, 'destroy'])->name('page.destroy')->middleware('auth');
Route::get('/discucao/delete/{id}', [ForumController::class, 'destroy']);

//VIEWS SOUSAPO
Route::view('/',            'pages.index')->name('sousapo.index');
Route::view('/apoio',       'pages.apoio')->name('sousapo.apoio');

Route::view('/conta',       'pages.conta')->name('sousapo.conta');
Route::view('/sobre',       'pages.sobre')->name('sousapo.sobre');
Route::view('/comunidade',  'pages.comunidade')->name('sousapo.comunidade');
Route::view('/cadastrar',   'pages.cadastrar')->name('sousapo.cadastrar');
Route::get('/lendo/{id}',  [HqController::class, 'show'])->name('sousapo.ler');
Route::get('/quadrinhos',   [HqController::class, 'quadrinhos'])->name('sousapo.quadrinhos');

//TESTES
Route::view('/form', 'admin.hq.upload.form');
Route::post('/upload', [UploadController::class, 'upload'])->name('upload');
