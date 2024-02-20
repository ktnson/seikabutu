<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>やることリスト</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        
    </head>
    <body>
        <h2 class="name">
            {{ $todo->name }}
        </h2>
         <div class="time">
            <div class="time__todos">
                <h3>期日</h3>
                <p>{{ $todo->time }}</p>    
            </div>
        </div>
        
        <div class="edit">
            <a href="/{{ $todo->event_id }}/todos/{{ $todo->id }}/edit">edit</a>
            
        <div class="footer">
           <a href="/events/{{ $todo->event_id }}">戻る</a>
        </div>
    </body>
</html>
