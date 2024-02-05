<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\File;

class NoteController extends Controller
{
    public function index(Note $note)
    {
        return view('notes.index')->with(['notes' => $note->get()]);
        //blade内で使う変数'notes'と設定。'notes'の中身にgetを使い、インスタンス化した$noteを代入。
    }
    
     public function show(Note $note)
    {
        return view('notes.show')->with(['note' => $note]);
        //blade内で使う変数'notes'と設定。'notes'の中身にgetを使い、インスタンス化した$noteを代入。
    }
    
    public function create(File $file)
    {
        return view('notes.create')->with(['files' => $file->get()]);

    }
    
    public function store(Request $request, Note $note)
    {
        $input = $request['note'];
        $note->fill($input)->save();
        return redirect('/notes' . $note->id);
    }
    
    public function edit(Note $note)
    {
        return view('notes.edit')->with(['note' => $note]);
    }

    public function update(Request $request, Note $note)
    {
        $input_note = $request['note'];
        $note->fill($input_note)->save();

        return redirect('/notes/' . $note->id);
    }
    
    public function delete(Note $note)
    {
        $note->delete();
        return redirect('/');
    }
}
