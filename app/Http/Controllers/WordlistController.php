<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wordlist;

class WordlistController extends Controller
{
    public function index(Wordlist $wordlist)
    {
        return view('wordlists.index')->with(['wordlists' => $wordlist->get()]);
        //blade内で使う変数'dictionries'と設定。'wordlists'の中身にgetを使い、インスタンス化した$dictionryを代入。
    }
    
     public function show(Wordlist $wordlist)
    {
        return view('wordlists.show')->with(['wordlist' => $wordlist]);
        //blade内で使う変数'dictionries'と設定。'wordlists'の中身にgetを使い、インスタンス化した$dictionryを代入。
    }
    
    public function create()
    {
        return view('wordlists.create');

    }
    
    public function store(Request $request, Wordlist $wordlist)
    {
        $input = $request['wordlist'];
        $wordlist->fill($input)->save();
        return redirect('/wordlists/' . $wordlist->id);
    }
    
    public function edit(Wordlist $wordlist)
    {
        return view('wordlists.edit')->with(['wordlist' => $wordlist]);
    }

    public function update(Request $request, Wordlist $wordlist)
    {
        $input_wordlist = $request['wordlist'];
        $wordlist->fill($input_wordlist)->save();

        return redirect('/wordlists/' . $wordlist->id);
    }
    
    public function delete(Wordlist $wordlist)
    {
        $wordlist->delete();
        return redirect('/');
    }
    
}