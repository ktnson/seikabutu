<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>note</title>
        
         <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        
    </head>
    <body>
    <h1 class="content">編集画面</h1>
    <div class="content">
        <form action="/notes/{{ $note->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>ノート題名</h2>
                <input type='text' name='note[name]' value="{{ $note->name }}">
            </div>
            <div class='content__body'>
                <h2>ノート内容</h2>
                <input type='text' name='note[content]' value="{{ $note->content }}">
            </div>
            <input type="submit" value="store">
        </form>
    </div>
</body>