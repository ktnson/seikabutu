<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Word;

class WordController extends Controller
{
    public function index(Word $word)
    {
        return view('words.index')->with(['wordlists' => $word->getByCategory()]);
    }
    
    
}