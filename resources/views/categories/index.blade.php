<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>イベント</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>成績一覧</h1>
        <a href='/scores/create'>成績新規登録</a>
       
        <div class='scores'>
            @foreach ($scores as $score)
                <div class='score'>
                    <h2>
                       <a href="/events/scores/{{ $score->id }}" class='name'>{{ $score->name }}</a> 
                    </h2>
                    <p>{{ $score->data }}</p>
                     <form action="/scores/{{ $score->id }}" id="form_{{ $score->id }}" method="score">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deleteScore({{ $score->id }})">delete</button> 
                    </form>
                </div>
                <a href="/events/{{ $score->event_id }}">戻る</a>
            @endforeach
        </div>
        </div>
    </body>
        <script>
            function deleteScore(id) {
                'use strict'

                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                    }
                }
        </script>
</html>
