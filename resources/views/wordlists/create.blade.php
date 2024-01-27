<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>単語帳</title>
        
         <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        
    </head>
    <body>
        <h1>単語帳</h1>
        <form action="/wordlists" method="POST">
            @csrf
            <div class="wordlist_name">
                <h2>単語</h2>
                <input type="wordlist" name="wordlist[word_name]" placeholder="単語"/>
            </div>
            <div class="meaning">
                <h2>意味・用法</h2>
                <textarea name="wordlist[meaning]" placeholder="単語の意味・用法"></textarea>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/dashboard">戻る</a>
        </div>
    </body>
</html>
