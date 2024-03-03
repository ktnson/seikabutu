<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>イベントリスト</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
         <!-- cssの読み込み -->
        <link href="{{ asset('event.show.css') }}" rel="stylesheet">
        
        
    </head>
    <body>
        <h1 class="name">
            {{ $event->name }}
        </h1>
        <a href="/events">イベント一覧に戻る</a>
        <a href="/events/{{ $event->id }}/todos/create">やることリスト新規登録</a>
        <div id="todos-container">
            @foreach ($event->todos as $todo)
            <!-- todoの表示ロジック-->
            <a href="/events/todos/{{ $todo->id }}"><h2>{{ $todo->name }}</h2></a>
            <p>{{ $todo->time }}</p>
            <form action="/events/todos/{{ $todo->id }}" id="form_{{ $todo->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn" type="button" onclick="deleteTodo({{ $todo->id }})">delete</button> 
                    </form>
            @endforeach
        </div>
        <a href="/events/{{ $event->id }}/scores/create">成績新規登録</a>
        <div id="scores-container">
            @foreach ($event->scores as $score)
            <!-- scoreの表示ロジック-->
            <a href="/events/scores/{{ $score->id }}"><h2>{{ $score->name }}</h2></a>
            <a href="/categories/{{ $score->category->id }}/{{ $event->id }}">{{ $score->category->name }}</a>
            <p>{{ $score->data }}</p>
            <form action="/events/scores/{{ $score->id }}" id="form_{{ $score->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn" type="button" onclick="deleteScore({{ $score->id }})">delete</button> 
                    </form>
            @endforeach
        </div>
         <script>
            function deleteTodo(id) {
                'use strict'

                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                    }
                }
        </script>     
        <script>
            function deleteScore(id) {
                'use strict'

                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                    }
                }
        </script>     
        
    </body>
</html>
