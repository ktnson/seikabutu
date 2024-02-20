<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;
use App\Models\Event;
use App\Models\Category;

class ScoreController extends Controller
{
     public function show(Score $score)
    {
        return view('scores.show')->with(['score' => $score]);
        //blade内で使う変数'scores'と設定。'scores'の中身にgetを使い、インスタンス化した$scoreを代入。
    }
    
    public function create(Event $event, Category $category)
    {
        return view('scores.create')->with(['event' => $event, 'categories' => $category->get()]);

    }
    
    public function store(Request $request, Score $scores)
    {
        $input = $request['score'];
        $scores->fill($input)->save();
        return redirect('/events/scores/' . $scores->id);
    }
    
    public function edit(Event $event, Score $score)
    {
        return view('scores.edit')->with(['score' => $score]);
    }

    public function update(Request $request, Score $score)
    {
        $input_scores = $request['score'];
        $score->fill($input_scores)->save();

        return redirect('/events/scores/' . $score->id);
    }
    
    public function delete(Score $score)
    {
        $event_id = $score->event_id;
        $score->delete();
        return redirect('/events/' . $event_id);
    }
}

