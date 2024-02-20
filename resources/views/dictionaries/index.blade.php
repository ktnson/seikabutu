<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Dictionary</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
    <x-slot name="header">
        {{ __('辞書一覧')}}
        </x-slot>
        <a href='/dictionaries/create'>辞書新規登録</a>
       
        <div class='dictionaries'>
            @foreach ($dictionaries as $dictionary)
                <div class='dictionary'>
                    <h2>
                       <a href="/dictionaries/{{ $dictionary->id }}" class='dictionary_name'>{{ $dictionary->dictionary_name }}</a> 
                    </h2>
                    
                     <p class='url'>{{ $dictionary->url }}</p>
                     <a href="/languages/{{ $dictionary->language->id }}">{{ $dictionary->language->name }}</a>
                     
                     <form action="/dictionaries/{{ $dictionary->id }}" id="form_{{ $dictionary->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deleteDictionary({{ $dictionary->id }})">delete</button> 
                    </form>
                </div>
            @endforeach
        </div>
         <div class="footer">
        </div>
        </x-app-layout>
        <script>
            function deleteDictionary(id) {
                'use strict'

                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                    }
                }
        </script>        
    </body>
</html>
