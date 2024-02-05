<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;

class EventController extends Controller
{
    public function index(Event $event)
    {
        return view('events.index')->with(['events' => $event->get()]);
        //blade内で使う変数'events'と設定。'events'の中身にgetを使い、インスタンス化した$eventを代入。
    }
    
     public function show(Event $event)
    {
        return view('events.show')->with(['event' => $event]);
        //blade内で使う変数'events'と設定。'events'の中身にgetを使い、インスタンス化した$eventを代入。
    }
    
    public function create()
    {
        return view('events.create');

    }
    
    public function store(Request $request, Event $event)
    {
        $input = $request['event'];
        $input['user_id'] = Auth::id();
        $event->fill($input)->save();
        return redirect('/events/' . $event->id);
    }
    
    //
    
    public function delete(Event $event)
    {
        $event->delete();
        return redirect('/events');
    }
}
