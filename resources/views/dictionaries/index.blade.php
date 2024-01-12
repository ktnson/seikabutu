<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Dictionary</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Dictionary List</h1>
        <a href='/dictionaries/create'>辞書新規登録</a>
       
        <div class='dictionaries'>
            @foreach ($dictionaries as $dictionary)
                <div class='dictionary'>
                     <h2 class='dictionary_name'>{{ $dictionry->dictionry_name }}</h2>
                     <p class='url'>{{ $dictionry->url }}</p>
                </div>
            @endforeach
        </div>
    </body>
</html>
