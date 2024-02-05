<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DictionaryController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\WordlistController;
use App\Http\Controllers\WordController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\NoteController;

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
    
    Route::get('/languages/{language}', [LanguageController::class,'index']);

});


Route::middleware('auth')->group(function () {
    Route::get('/wordlists' , [WordlistController::class, 'index']);
    Route::get('/wordlists/create' , [WordlistController::class, 'create']);
    Route::get('/wordlists/{wordlist}' , [WordlistController::class, 'show']);
    Route::post('/wordlists' , [WordlistController::class, 'store']);
    Route::get('/wordlists/{wordlist}/edit' , [WordlistController::class, 'edit']);
    Route::put('/wordlists/{wordlist}' , [WordlistController::class, 'update']);
    Route::delete('/wordlists/{wordlist}', [WordlistController::class,'delete']);
    
    Route::get('/words/{word}', [WordController::class,'index']);
});


Route::middleware('auth')->group(function () {
    Route::get('/events' , [EventController::class, 'index']);
    Route::get('/events/create' , [EventController::class, 'create']);
    Route::get('/events/{event}' , [EventController::class, 'show']);
    Route::post('/events' , [EventController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::get('/files' , [FileController::class, 'index']);
    Route::get('/files/create' , [FileController::class, 'create']);
    Route::get('/files/{file}' , [FileController::class, 'show']);
    Route::post('/files' , [FileController::class, 'store']);
    Route::delete('/files/{file}', [FileController::class,'delete']);
    
    
    Route::get('/lessons/{lesson}', [LessonController::class,'index']);
});

Route::middleware('auth')->group(function () {
    Route::get('/notes' , [NoteController::class, 'index']);
    Route::get('/notes/create' , [NoteController::class, 'create']);
    Route::get('/notes/{note}' , [NoteController::class, 'show']);
    Route::post('/notes' , [NoteController::class, 'store']);
    Route::get('/notes/{note}/edit' , [NoteController::class, 'edit']);
    Route::put('/notes/{note}' , [NoteController::class, 'update']);
    Route::delete('/notes/{note}', [NoteController::class,'delete']);
    
    Route::get('/files/{file}', [FileController::class,'index']);
    
});