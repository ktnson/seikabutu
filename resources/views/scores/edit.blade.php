<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>成績リスト</title>
        
         <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        
    </head>
    <body>
    <h1 class="content">編集画面</h1>
    <div class="content">
        <form action="/scores/{{ $score->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>成績</h2>
                <input type='text' name='score[name]' value="{{ $score->name }}">
            </div>
            <div class='content__body'>
                <h2>値</h2>
                <input type='text' name='score[data]' value="{{ $score->data }}">
            </div>
            <input type="hidden" name='score[event_id]' value='{{ $score->event_id}}'>
            <input type="submit" value="store">
        </form>
    </div>
</body>