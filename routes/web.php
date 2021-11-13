<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\SiteVisitanteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();





Route::get('/casa-nova', [App\Http\Controllers\SiteController::class, 'index'])->name('site.index');

Route::get('/casa-nova/dashboard', [App\Http\Controllers\SiteController::class, 'dashboard'])->name('site.dashboard')->middleware('auth');
Route::get('/casa-nova/createIntro', [App\Http\Controllers\SiteController::class, 'createIntro'])->name('site.createIntro')->middleware('auth');


