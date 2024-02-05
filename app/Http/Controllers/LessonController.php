<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lesson;

class LessonController extends Controller
{
    public function index(lesson $lesson)
    {
        return view('lessons.index')->with(['files' => $lesson->getByCategory()]);
    }
    
    
}