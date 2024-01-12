<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Dictionary</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Dictionary List</h1>
        <a href='/dictionaries/create'>辞書新規登録</a>
        <div class='dictionaries'>
            @foreach ($dictionaries as $dictionary)
                <div class='dictionary'>
                    <h2>
                       <a href="/dictionaries/{{ $dictionary->id }}" class='dictionary_name'>{{ $dictionary->dictionary_name }}</a> 
                    </h2>
                     <p class='url'>{{ $dictionary->url }}</p>
                     
                     <form action="/dicitonaries/{{ $dictionary->id }}" id="form_{{ $dictionary->id }}" method="dictionary">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deleteDictionary({{ $dictionary->id }})">delete</button> 
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
