<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DictionaryController;

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
    return view('home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    Route::get('/dictionaries' , [DictionaryController::class, 'index']);
    Route::get('/dictionaries/create' , [DictionaryController::class, 'create']);
    Route::get('/dictionaries/{dictionary}' , [DictionaryController::class, 'show']);
    Route::post('/dictionaries' , [DictionaryController::class, 'store']);
});


Route::middleware('auth')->group(function () {
    Route::get('/wordlists' , [WordlistController::class, 'index']);
    Route::get('/wordlists/create' , [WordlistController::class, 'create']);
    Route::get('/wordlists/{wordlist}' , [WordlistController::class, 'show']);
    Route::post('/wordlists' , [WordlistController::class, 'store']);
});


Route::middleware('auth')->group(function () {
    Route::get('/events' , [EventController::class, 'index']);
    Route::get('/events/create' , [EventController::class, 'create']);
    Route::get('/events/{event}' , [EventController::class, 'show']);
    Route::post('/events' , [EventController::class, 'store']);
});