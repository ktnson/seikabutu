<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>やることリスト</title>
        
         <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        
    </head>
    <body>
        <h1>やることリスト作成</h1>
        <form action="/todos/store" method="POST">
            @csrf
            <input type="hidden" name="todo[event_id]" value="{{ $event->id }}">
            <div class="name">
                <h2>やること題名</h2>
                <input type="text" name="todo[name]" placeholder="やることの具体的な内容を書いてください"/>
            </div>
            <div class="time">
                <h2>期日</h2>
                <textarea name="todo[time]" placeholder="期日はいつまでにしたいですか"></textarea>
            </div>
            <input class="input" type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/events">戻る</a>
        </div>
    </body>
</html>
