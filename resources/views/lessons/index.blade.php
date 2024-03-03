<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ファイル</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>ファイル　リスト</h1>
        <a href='/files/create'>ファイル新規登録</a>
       
        <div class='files'>
            @foreach ($files as $file)
                <div class='file'>
                    <h2>
                       <a href="/files/{{ $file->id }}" class='name'>{{ $file->name }}</a> 
                    </h2>
                     <form action="/files/{{ $file->id }}" id="form_{{ $file->id }}" method="file">
                        @csrf
                        @method('DELETE')
                        <button class="btn" type="button" onclick="deleteFile({{ $file->id }})">delete</button> 
                    </form>
                </div>
            @endforeach
        </div>
        <a href="/lessons/{{ $file->lesson->id }}">{{ $file->lesson->name }}</a>
        </div>
        <div class="footer">
            <a href="/files">戻る</a>
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
