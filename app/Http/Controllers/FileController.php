<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\File;
use App\Models\Lesson;


class FileController extends Controller
{
    public function index(File $file)
    {
        return view('files.index')->with(['files' => $file->get()]);
        //blade内で使う変数'files'と設定。'files'の中身にgetを使い、インスタンス化した$fileを代入。
    }
    
     public function show(File $file)
    {
        return view('files.show')->with(['file' => $file]);
        //blade内で使う変数'files'と設定。'files'の中身にgetを使い、インスタンス化した$fileを代入。
    }
    
    public function create(Lesson $lesson)
    {
        return view('files.create')->with(['lessons' => $lesson->get()]);

    }
    
    public function store(Request $request, File $file)
    {
        $input = $request['file'];
        $input['user_id'] = Auth::id();
        $file->fill($input)->save();
        return redirect('/files/' . $file->id);
    }
    
    //
    
    public function delete(File $file)
    {
        $file->delete();
        return redirect('/files');
    }
}
