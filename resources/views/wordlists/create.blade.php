<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>wordlist</title>
        
         <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        
    </head>
    <body>
        <h1>wordlist</h1>
        <form action="/wordlists" method="POST">
            @csrf
            <div class="wordlist_name">
                <h2>単語帳</h2>
                <input type="wordlist_name" name="wordlist[wordlist_name]" placeholder="単語帳"/>
            </div>
            <div class="word">
                <h2>単語</h2>
                <textarea name="wordlist[word]" placeholder="単語の意味を入力する"></textarea>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>
