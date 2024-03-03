<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ノート一覧</title>
        
         <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
         <!-- cssの読み込み -->
        <link href="{{ asset('note.create.css') }}" rel="stylesheet">
        
    </head>
    <body>
        <h1>ノート作成</h1>
        <form action="/notes/store" method="POST">
            @csrf
            <input type="hidden" name="note[file_id]" value="{{ $file->id }}">
            <div class="name">
                <h2>ノート題名</h2>
                <input type="text" name="note[name]" placeholder="ノートの題名を書いてください"/>
            </div>
            <div class="content">
                <h2>内容</h2>
                <textarea name="note[content]" placeholder="ノートの内容を書いてください"></textarea>
            </div>
            <input class="input" type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/files">戻る</a>
        </div>
    </body>
</html>
