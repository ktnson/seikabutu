<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(Score $score , Category $category)
    {
        Score::where("event_id", $score->event_id)->get();
        return view('categories.index')->with(['scores' => $score, category => $category]);
    }
    
    
}