<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Event</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Event List</h1>
        <a href='/events/create'>イベント新規登録</a>
       
        <div class='events'>
            @foreach ($events as $event)
                <div class='event'>
                    <h2>
                       <a href="/events/{{ $event->id }}" class='event_name'>{{ $event->name }}</a> 
                    </h2>
                     <form action="/dicitonaries/{{ $event->id }}" id="form_{{ $event->id }}" method="event">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deleteEvent({{ $event->id }})">delete</button> 
                    </form>
                </div>
            @endforeach
        </div>
    </body>
        <script>
            function deletePost(id) {
                'use strict'

                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                    }
                }
        </script>
</html>
