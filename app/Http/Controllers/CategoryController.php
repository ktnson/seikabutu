<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;
use App\Models\Category;
use App\Models\Event;

class CategoryController extends Controller
{
    public function index(Category $category , Event $event , Score $score)
    {
        
        return view('categories.index')->with(['scores' => $score->where("event_id", $event->id)->where("category_id", $category->id)->get()]);
    }
    
    
}