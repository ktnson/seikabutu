<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Dictionary</title>
        
         <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        
    </head>
    <body>
    <h1 class="url">編集画面</h1>
    <div class="content">
        <form action="/dictionaries/{{ $dictionary->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>辞書名</h2>
                <input type='text' name='dictionary[dictionary_name]' value="{{ $dictionary->dictionary_name }}">
            </div>
            <div class='content__body'>
                <h2>URL</h2>
                <input type='text' name='dictionary[url]' value="{{ $dictionary->url }}">
            </div>
            <input type="submit" value="store">
        </form>
    </div>
</body>