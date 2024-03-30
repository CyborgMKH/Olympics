<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AthleteController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HighlightController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SportController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\SearchController;
use Livewire\Livewire;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::fallback(function () {
    return view('404');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/search', [SearchController::class, 'index'])->name('search');
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news/{slug}', [NewsController::class, 'singleNews'])->name('news.single');
Route::get('/athletes', [AthleteController::class, 'index'])->name('athlete');
Route::get('/athletes/{slug}', [AthleteController::class, 'singleAthlete'])->name('athlete.single');
Route::get('/highlights', [HighlightController::class, 'index'])->name('highlight');
Route::get('/highlights/{slug}', [HighlightController::class, 'single'])->name('highlight.single');
Route::get('/sports', [SportController::class, 'index'])->name('sport');
Route::get('/events', [EventController::class, 'index'])->name('event');
Route::post('/news/like/{id}', [NewsController::class, 'newsLike']);
Route::post('/news/unlike/{id}', [NewsController::class, 'newsUnlike']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/tickets', [TicketController::class, 'index'])->name('ticket');
    Route::get('create-transaction', [PayPalController::class, 'createTransaction'])->name('createTransaction');
    Route::post('process-transaction', [PayPalController::class, 'processTransaction'])->name('processTransaction');
    Route::get('success-transaction', [PayPalController::class, 'successTransaction'])->name('successTransaction');
    Route::get('cancel-transaction', [PayPalController::class, 'cancelTransaction'])->name('cancelTransaction');
});
Livewire::setScriptRoute(function ($handle) {
    return Route::get('/olympics/livewire/livewire.js', $handle);
});

Livewire::setUpdateRoute(function ($handle) {
    return Route::post('/olympics/livewire/update', $handle);
});
require __DIR__ . '/auth.php';
