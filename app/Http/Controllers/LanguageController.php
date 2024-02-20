<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;

class LanguageController extends Controller
{
    public function index(Language $language)
    {
        return view('languages.index')->with(['dictionaries' => $language->getByCategory()]);
    }
    
    
}