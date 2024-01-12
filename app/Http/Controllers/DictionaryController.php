<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dictionary;

class DictionaryController extends Controller
{
    public function index(Dictionary $dictionary)
    {
        return view('dictionaries.index')->with(['dictionaries' => $dictionary->get()]);
        //blade内で使う変数'dictionries'と設定。'dictionaries'の中身にgetを使い、インスタンス化した$dictionryを代入。
    }
    
     public function show(Dictionary $dictionary)
    {
        return view('dictionaries.show')->with(['dictionaries' => $dictionary->get()]);
        //blade内で使う変数'dictionries'と設定。'dictionaries'の中身にgetを使い、インスタンス化した$dictionryを代入。
    }
    
    public function create()
    {
        return view('dictionaries.create');

    }
    
    public function store(Request $request, Dictionary $dictionary)
    {
      dd($request->all());
    }
    //
}
