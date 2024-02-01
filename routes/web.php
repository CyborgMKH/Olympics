<?php

use App\Http\Controllers\AthleteController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HighlightController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SportController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/news',[NewsController::class,'index'])->name('news');
Route::get('/news/{slug}',[NewsController::class,'singleNews'])->name('news.single');
Route::get('/athletes',[AthleteController::class,'index'])->name('athlete');
Route::get('/athletes/{slug}',[AthleteController::class,'singleAthlete'])->name('athlete.single');
Route::get('/highlights',[HighlightController::class,'index'])->name('highlight');
Route::get('/highlights/{slug}',[HighlightController::class,'single'])->name('highlight.single');
Route::get('/sports',[SportController::class,'index'])->name('sport');
Route::get('/events',[EventController::class,'index'])->name('event');


