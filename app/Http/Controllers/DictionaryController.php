<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dictionary; //App/Models内のDictionaryクラスをControllerにインポートしている

class DictionaryController extends Controller

{ 
    public function index(Dictionary $dictionary) //インポートしたDictionaryをインスタンス化して$dictionaryとして使用
    {
    //
        return $dictionary->get(); //$dictionaryの中身を戻り値にする
    }
}