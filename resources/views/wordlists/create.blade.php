<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>単語帳</title>
        
         <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        
    </head>
    <body>
        <h1>単語帳</h1>
        <a href="/wordlists">単語帳一覧に戻る</a>
        <form action="/wordlists" method="POST">
            @csrf
            <div class="wordlist_name">
                <h2>単語</h2>
                <input type="text" name="wordlist[wordlist_name]" placeholder="単語"/>
            <div class="name">
                <h2>意味・用法</h2>
                <textarea name="wordlist[name]" placeholder="意味や用法を記載する"></textarea>
            </div>
            <div class="word">
                <h2>品詞</h2>
                    <select name="wordlist[word_id]">
                        @foreach($words as $word)
                            <option value="{{ $word->id }}">{{ $word->name }}</option>
                        @endforeach
                    </select>
            </div>
            </div>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
        </div>
    </body>
</html>
