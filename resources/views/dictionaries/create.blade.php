<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Dictionary</title>
        
         <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
         <!-- cssの読み込み -->
        <link href="{{ asset('/css/dictionary.index.css') }}" rel="stylesheet">
        
    </head>
    <body>
        <h1>辞書一覧</h1>
        <form action="/dictionaries" method="POST">
            @csrf
            <div class="dictionary_name">
                <h2>辞書名</h2>
                <input type="text" name="dictionary[dictionary_name]" placeholder="辞書名"/>
            </div>
            <div class="url">
                <h2>URL</h2>
                <textarea name="dictionary[url]" placeholder="URLを張り付ける"></textarea>
            </div>
            <div class="language">
                <h2>Language</h2>
                     <select name="dictionary[language_id]">
                        @foreach($languages as $language)
                            <option value="{{ $language->id }}">{{ $language->name }}</option>
                        @endforeach
                    </select>
</div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/dashboard">戻る</a>
        </div>
    </body>
</html>
