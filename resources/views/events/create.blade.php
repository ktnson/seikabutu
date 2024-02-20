<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Event</title>
        
         <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        
    </head>
    <body>
        <h1>イベントリスト</h1>
        <form action="/events" method="POST">
            @csrf
            <div class="name">
                <h2>イベント名</h2>
                <input type="name" name="event[name]" placeholder="イベント名"/>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/events">戻る</a>
        </div>
    </body>
</html>
