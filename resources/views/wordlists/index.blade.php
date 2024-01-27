<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>単語帳</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>単語帳</h1>
        <a href='/wordlists/create'>単語新規登録</a>
       
        <div class='wordlists'>
            @foreach ($wordlists as $wordlist)
                <div class='wordlist'>
                    <h2>
                       <a href="/wordlists/{{ $wordlist->id }}" class='wordlist_name'>{{ $wordlist->wordlist_name }}</a> 
                    </h2>
                     <p class='meaning'>{{ $wordlist->url }}</p>
                     
                     <form action="/dicitonaries/{{ $wordlist->id }}" id="form_{{ $wordlist->id }}" method="wordlist">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletewordlist({{ $wordlist->id }})">delete</button> 
                    </form>
                </div>
            @endforeach
        </div>
    </body>
        <script>
            function deletePost(id) {
                'use strict'

                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                    }
                }
        </script>
</html>
