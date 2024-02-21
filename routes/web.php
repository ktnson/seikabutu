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
use App\Http\Controllers\TodoController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\CategoryController;

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
    Route::get('/dictionaries' , [DictionaryController::class, 'index'])->name('dictionaries.index');
    Route::get('/dictionaries/create' , [DictionaryController::class, 'create']);
    Route::get('/dictionaries/{dictionary}' , [DictionaryController::class, 'show']);
    Route::post('/dictionaries' , [DictionaryController::class, 'store']);
    Route::get('/dictionaries/{dictionary}/edit' , [DictionaryController::class, 'edit']);
    Route::put('/dictionaries/{dictionary}' , [DictionaryController::class, 'update']);
    Route::delete('/dictionaries/{dictionary}', [DictionaryController::class,'delete']);
    
    Route::get('/languages/{language}', [LanguageController::class,'index']);

});


Route::middleware('auth')->group(function () {
    Route::get('/wordlists' , [WordlistController::class, 'index'])->name('wordlists.index');
    Route::get('/wordlists/create' , [WordlistController::class, 'create']);
    Route::get('/wordlists/{wordlist}' , [WordlistController::class, 'show']);
    Route::post('/wordlists' , [WordlistController::class, 'store']);
    Route::get('/wordlists/{wordlist}/edit' , [WordlistController::class, 'edit']);
    Route::put('/wordlists/{wordlist}' , [WordlistController::class, 'update']);
    Route::delete('/wordlists/{wordlist}', [WordlistController::class,'delete']);
    
    Route::get('/words/{word}', [WordController::class,'index']);
});


Route::middleware('auth')->group(function () {
    Route::get('/events' , [EventController::class, 'index'])->name('events.index');
    Route::get('/events/create' , [EventController::class, 'create']);
    Route::get('/events/{event}' , [EventController::class, 'show']);
    Route::post('/events' , [EventController::class, 'store']);
    Route::delete('/events/{event}', [EventController::class,'delete']);
});

Route::middleware('auth')->group(function () {
    Route::get('/events/{event}/todos/create' , [TodoController::class, 'create']);
    Route::get('/events/todos/{todo}' , [TodoController::class, 'show']);
    Route::post('/todos/store' , [TodoController::class, 'store']);
    Route::get('{event}/todos/{todo}/edit' , [TodoController::class, 'edit']);
    Route::put('/todos/{todo}' , [TodoController::class, 'update']);
    Route::delete('events/todos/{todo}', [TodoController::class,'delete']);
    
});

Route::middleware('auth')->group(function () {
    Route::get('/events/{event}/scores/create' , [ScoreController::class, 'create']);
    Route::get('/events/scores/{score}' , [ScoreController::class, 'show']);
    Route::post('/scores/store' , [ScoreController::class, 'store']);
    Route::get('{event}/scores/{score}/edit' , [ScoreController::class, 'edit']);
    Route::put('/scores/{score}' , [ScoreController::class, 'update']);
    Route::delete('events/scores/{score}', [ScoreController::class,'delete']);
    
    Route::get('/categories/{category}/{event}', [CategoryController::class,'index']);
    
});

Route::middleware('auth')->group(function () {
    Route::get('/files' , [FileController::class, 'index'])->name('files.index');
    Route::get('/files/create' , [FileController::class, 'create']);
    Route::get('/files/{file}' , [FileController::class, 'show']);
    Route::post('/files' , [FileController::class, 'store']);
    Route::delete('/files/{file}', [FileController::class,'delete']);
    
    
    Route::get('/lessons/{lesson}', [LessonController::class,'index']);
});

Route::middleware('auth')->group(function () {
    Route::get('/files/{file}/notes/create' , [NoteController::class, 'create']);
    Route::get('/files/notes/{note}' , [NoteController::class, 'show']);
    Route::post('/notes/store' , [NoteController::class, 'store']);
    Route::get('/{file}/notes/{note}/edit' , [NoteController::class, 'edit']);
    Route::put('/notes/{note}' , [NoteController::class, 'update']);
    Route::delete('files/notes/{note}', [NoteController::class,'delete']);
    
    
    
});