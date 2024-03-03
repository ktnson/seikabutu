<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>成績登録</title>
        
         <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        
    </head>
    <body>
        <h1>成績登録</h1>
        <form action="/scores/store" method="POST">
            @csrf
        <div class="category">
                <h2>成績カテゴリー</h2>
                     <select name="score[category_id]">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
            <input type="hidden" name="score[event_id]" value="{{ $event->id }}">
            <div class="name">
                <h2>成績題名</h2>
                <input type="text" name="score[name]" placeholder="成績の種類を書いてください"/>
            </div>
            <div class="data">
                <h2>数値</h2>
                <textarea name="score[data]" placeholder="成績の値を入力してください"></textarea>
            </div>
            <input class="input" type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/events">戻る</a>
        </div>
    </body>
</html>
