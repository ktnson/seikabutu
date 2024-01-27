<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dictionary;

class DictionaryController extends Controller
{
    public function index(Dictionary $dictionary)
    {
        return view('dictionaries.index')->with(['dictionaries' => $dictionary->get()]);
        //blade内で使う変数'dictionaries'と設定。'dictionaries'の中身にgetを使い、インスタンス化した$dictionaryを代入。
    }
    
     public function show(Dictionary $dictionary)
    {
        return view('dictionaries.show')->with(['dictionary' => $dictionary]);
        //blade内で使う変数'dictionaries'と設定。'dictionaries'の中身にgetを使い、インスタンス化した$dictionaryを代入。
    }
    
    public function create()
    {
        return view('dictionaries.create');

    }
    
    public function store(Request $request, Dictionary $dictionary)
    {
        $input = $request['dictionary'];
        $dictionary->fill($input)->save();
        return redirect('/dictionaries/' . $dictionary->id);
    }
    
    //
    
    public function edit(Dictionary $dictionary)
    {
        return view('dictionaries.edit')->with(['dictionary' => $dictionary]);
    }

    public function update(Request $request, Dictionary $dictionary)
    {
        $input_dictionary = $request['dictionary'];
        $dictionary->fill($input_dictionary)->save();

        return redirect('/dictionaries/' . $dictionary->id);
    }
    
    public function delete(Dictionary $dictionary)
    {
        $dictionary->delete();
        return redirect('/');
    }
}
