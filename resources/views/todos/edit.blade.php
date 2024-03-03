<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>やることリスト</title>
        
         <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        
    </head>
    <body>
    <h1 class="content">編集画面</h1>
    <div class="content">
        <form action="/todos/{{ $todo->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>やること</h2>
                <input type='text' name='todo[name]' value="{{ $todo->name }}">
            </div>
            <div class='content__body'>
                <h2>期日</h2>
                <input type='text' name='todo[time]' value="{{ $todo->time }}">
            </div>
            <input type="hidden" name='todo[event_id]' value='{{ $todo->event_id}}'>
            <input class="input" type="submit" value="store">
        </form>
    </div>
</body>