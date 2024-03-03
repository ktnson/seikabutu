<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>home</title>
        
         <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    
    <style>
        .home{text-align: center;
        }
        
        body {display: flex;
              flex-direction: column;
              align-items: center;
              justify-content: center;
        }
       
    </style>
    </head>
    
    <h1 class="home">Language Note</h1>
    <h2 class="home">トップページ</h2>
    <body>
        <a href="/dictionaries">辞書</a>
        <a href="/wordlists">単語帳</a>
        <a href="/events">イベント</a>
        <a href="/files">ファイル</a>
        
    </body>
</html>