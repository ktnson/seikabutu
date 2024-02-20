<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\File;

class NoteController extends Controller
{
     public function show(Note $note)
    {
        return view('notes.show')->with(['note' => $note]);
        //blade内で使う変数'notes'と設定。'notes'の中身にgetを使い、インスタンス化した$noteを代入。
    }
    
    public function create(File $file)
    {
        return view('notes.create')->with(['file' => $file]);

    }
    
    public function store(Request $request, Note $notes)
    {
        $input = $request['note'];
        $notes->fill($input)->save();
        return redirect('/files/notes/' . $notes->id);
    }
    
    public function edit(File $file, Note $note)
    {
        return view('notes.edit')->with(['note' => $note]);
    }

    public function update(Request $request, Note $note)
    {
        $input_notes = $request['note'];
        $note->fill($input_notes)->save();

        return redirect('/files/notes/' . $note->id);
    }
    
    public function delete(Note $note)
    {
        $file_id = $note->file_id;
        $note->delete();
        return redirect('/files/' . $file_id);
    }
}
