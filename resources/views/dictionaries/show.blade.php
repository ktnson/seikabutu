<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dictionary List</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        
    </head>
    <body>
        <a href="/dictionaries">辞書一覧に戻る</a>
        <h1 class="dictionary_name">
            {{ $dictionary->dictionary_name }}
        </h1>
        <div class="content">
            <div class="content__dictionary">
                <h3>URL</h3>
                <p>{{ $dictionary->url }}</p>    
            </div>
        </div>
        
        <div class="edit">
            <a href="/dictionaries/{{ $dictionary->id }}/edit">edit</a>
            
            
        </div>
            <a href="/languages/{{ $dictionary->language->id }}">{{ $dictionary->language->name }}</a>
            
        <div class="footer">
        </div>
    </body>
</html>
