<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ファイルリスト</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        
    </head>
    <body>
           <a href="/files">ファイル一覧に戻る</a>
        <h1 class="name">
            {{ $file->name }}
        </h1>
        <a href="/lessons/{{ $file->lesson->id }}">{{ $file->lesson->name }}</a>
        <a href="/files/{{ $file->id }}/notes/create">ノート新規登録</a>
        <div id="notes-container">
            @foreach ($file->notes as $note)
            <!-- ノートの表示ロジック-->
            <a href="/files/notes/{{ $note->id }}"><h2>{{ $note->name }}</h2></a>
            <p>{{ $note->content }}</p>
            <form action="/files/notes/{{ $note->id }}" id="form_{{ $note->id }}" method="POST"> 
                        @csrf
                        @method('DELETE')
                        <button class="btn" type="button" onclick="deleteNote({{ $note->id }})">delete</button> 
                    </form>
            @endforeach
        </div>
        <div class="footer">
        </div>
         <script>
            function deleteNote(id) {
                'use strict'

                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                    }
                }
        </script>     
        
    </body>
</html>
