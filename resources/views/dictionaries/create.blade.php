<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Dictionary</title>
        
         <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        
    </head>
    <body>
        <h1>Dictionary List</h1>
        <form action="/dictionaries" method="POST">
            @csrf
            <div class="dictionary_name">
                <h2>辞書名</h2>
                <input type="dictionary_name" name="dictionary[dictionary_name]" placeholder="辞書名"/>
            </div>
            <div class="url">
                <h2>URL</h2>
                <textarea name="dictionary[url]" placeholder="URLを張り付ける"></textarea>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>
