<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ノート一覧</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        
    </head>
    <body>
        <h1 class="name">
            {{ $note->name }}
        </h1>
         <div class="content">
            <div class="content__notes">
                <h3>ノート内容</h3>
                <p>{{ $note->content }}</p>    
            </div>
        </div>
        
        <div class="edit">
            <a href="/{{ $note->file_id }}/notes/{{ $note->id }}/edit">edit</a>
            
        <div class="footer">
           <a href="/files/{{ $note->file_id }}/">戻る</a>
        </div>
    </body>
</html>
