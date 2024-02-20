<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>wordlist</title>
        
         <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        
    </head>
    <body>
    <h1 class="wordlist_name">編集画面</h1>
    <div class="content">
        <form action="/wordlists/{{ $wordlist->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>単語名</h2>
                <input type='text' name='wordlist[wordlist_name]' value="{{ $wordlist->wordlist_name }}">
            </div>
            <div class='content__body'>
                <h2>意味・用法</h2>
                <input type='text' name='wordlist[name]' value="{{ $wordlist->name }}">
            </div>
            <input type="submit" value="store">
        </form>
    </div>
</body>