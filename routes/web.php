<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DictionaryController;
use App\Http\Controllers\WordlistController;

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
    Route::get('/dictionaries/{dictionary}/edit' , [DictionaryController::class, 'edit']);
    Route::put('/dictionaries/{dictionary}' , [DictionaryController::class, 'update']);
    Route::delete('/dictionaries/{dictionary}', [DictionaryController::class,'delete']);

});

Route::middleware('auth')->group(function () {
    Route::get('/wordlists' , [WordlistController::class, 'index']);
    Route::get('/wordlists/create' , [WordlistController::class, 'create']);
    Route::get('/wordlists/{Wordlist}' , [WordlistController::class, 'show']);
    Route::post('/wordlists' , [WordlistController::class, 'store']);
    Route::get('/wordlists/{wordlist}/edit' , [WordlistController::class, 'edit']);
    Route::put('/wordlists/{wordlist}' , [WordlistController::class, 'update']);
    Route::delete('/wordlists/{wordlist}', [WordlistController::class,'delete']);
});