<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ノート</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>ノート一覧</h1>
        <a href='/notes/create'>ノート新規登録</a>
       
        <div class='notes'>
            @foreach ($notes as $note)
                <div class='note'>
                    <h2>
                       <a href="/notes/{{ $note->id }}" class='name'>{{ $note->name }}</a> 
                    </h2>
                     <form action="/notes/{{ $note->id }}" id="form_{{ $note->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deleteNote({{ $note->id }})">delete</button> 
                    </form>
                </div>
            @endforeach
        <div class="footer">
            <a href="/files">戻る</a>
        </div>
    </body>
        <script>
            function deleteNote(id) {
                'use strict'

                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                    }
                }
        </script>
</html>
