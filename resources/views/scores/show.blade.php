<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>成績リスト</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        
    </head>
    <body>
        <h2 class="name">
            {{ $score->name }}
        </h2>
         <div class="data">
            <div class="data__scores">
                 <h3>データ</h3>
                <p>{{ $score->data }}</p>    
            </div>
        </div>
        
        <div class="edit">
            <a href="/{{ $score->event_id }}/scores/{{ $score->id }}/edit">edit</a>
            
        <div class="footer">
           <a href="/events/{{ $score->event_id }}">戻る</a>
        </div>
    </body>
</html>