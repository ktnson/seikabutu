<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>wordlist List</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        
    </head>
    <body>
        <h1 class="wordlist_name">
            {{ $wordlist->wordlist_name }}
        </h1>
        <div class="content">
            <div class="content__wordlist">
                <h3>単語</h3>
                <p>{{ $wordlist->word }}</p>    
            </div>
        </div>
        
        <div class="edit">
            <a href="/wordlists/{{ $wordlist->id }}/edit">edit</a>
        </div>
        
        
        <div class="footer">
           <a href="/">戻る</a>
        </div>
    </body>
</html>
