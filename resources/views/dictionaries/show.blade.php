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
        <h1 class="dictionary_name">
            {{ $dictionary->dictionary_name }}
        </h1>
        <div class="content">
            <div class="content__dictionary">
                <h3>辞書</h3>
                <p>{{ $dictionary->url }}</p>    
            </div>
        </div>
        <div class="footer">
           <a href="/">戻る</a>
        </div>
    </body>
</html>