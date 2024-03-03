<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>単語帳</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- cssの読み込み -->
        <link href="{{ asset('wordlist.index.css') }}" rel="stylesheet">
    </head>
    <x-app-layout>
    <x-slot name="header">
        {{ __('単語帳一覧')}}
        </x-slot>
        <a href='/wordlists/create'>単語新規登録</a>
       
        <div class='wordlists'>
            @foreach ($wordlists as $wordlist)
                <div class='wordlist'>
                    <h2>
                       <a href="/wordlists/{{ $wordlist->id }}" class='wordlist_name'>{{ $wordlist->wordlist_name }}</a> 
                    </h2>
                     <p class='name'>{{ $wordlist->name }}</p>
                        <a href="/words/{{ $wordlist->word->id }}">{{ $wordlist->word->name }}</a>
                     <form action="/wordlists/{{ $wordlist->id }}" id="form_{{ $wordlist->id }}" method="POST">
                         
                        @csrf
                        @method('DELETE')
                        <button class="btn" type="button" onclick="deleteWordlist({{ $wordlist->id }})">delete</button> 
                    </form>
                </div>
            @endforeach
        </div>
        <div class="footer">
        </div>
        </x-app-layout>
        <script>
            function deleteWordlist(id) {
                'use strict'

                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                    }
                }
        </script>
</html>
