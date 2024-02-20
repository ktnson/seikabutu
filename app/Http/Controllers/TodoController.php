<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Models\Event;

class TodoController extends Controller
{
     public function show(Todo $todo)
    {
        return view('todos.show')->with(['todo' => $todo]);
        //blade内で使う変数'todos'と設定。'todos'の中身にgetを使い、インスタンス化した$todoを代入。
    }
    
    public function create(Event $event)
    {
        return view('todos.create')->with(['event' => $event]);

    }
    
    public function store(Request $request, Todo $todos)
    {
        $input = $request['todo'];
        $todos->fill($input)->save();
        
        return redirect('/events/todos/' . $todos->id);
    }
    
    public function edit(Event $event, Todo $todo)
    {
        return view('todos.edit')->with(['todo' => $todo]);
    }

    public function update(Request $request, Todo $todo)
    {
        $input_todos = $request['todo'];
        $todo->fill($input_todos)->save();

        return redirect('/events/todos/' . $todo->id);
    }
    
    public function delete(Todo $todo)
    {
        $todo->delete();
        return redirect('/events/todos/');
    }
}

