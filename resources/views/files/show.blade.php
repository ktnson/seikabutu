<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ファイル　リスト</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        
    </head>
    <body>
        <h1 class="name">
            {{ $file->name }}
        </h1>
        <a href="/lessons/{{ $file->lesson->id }}">{{ $file->lesson->name }}</a>
        <a href="/notes">ノート新規登録</a>
        <div class="footer">
           <a href="/files">戻る</a>
        </div>
    </body>
</html>
