<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ファイル</title>
        
         <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        
    </head>
    <body>
        <h1>ファイル　リスト</h1>
        <form action="/files" method="POST">
            <a href="/files">ファイル一覧に戻る</a>
            @csrf
            <div class="name">
                <h2>ファイル名</h2>
                <input type="text" name="file[name]" placeholder="ファイル名"/>
            </div>
            <div class="lesson">
                <h2>授業カテゴリー</h2>
                     <select name="file[lesson_id]">
                        @foreach($lessons as $lesson)
                            <option value="{{ $lesson->id }}">{{ $lesson->name }}</option>
                        @endforeach
                    </select>
            <input type="submit" value="store"/>
        </form>
            <div class="footer">
        </div>
    </body>
</html>
