<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ノート一覧</title>
        
         <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        
    </head>
    <body>
        <h1>ノート一覧</h1>
        <form action="/notes" method="POST">
            @csrf
            <div class="name">
                <h2>ノート名</h2>
                <input type="text" name="note[name]" placeholder="ノート題名"/>
            </div>
            <div class="file">
                <h2>ファイル名</h2>
                     <select name="note[file_id]">
                        @foreach($files as $file)
                            <option value="{{ $file->id }}">{{ $file->name }}</option>
                        @endforeach
                    </select>
            <div class="content">
                <h2>内容</h2>
                <textarea name="note[content]" placeholder="ノートを書く"></textarea>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/dashboard">戻る</a>
        </div>
    </body>
</html>
