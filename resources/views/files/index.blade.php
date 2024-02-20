<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ファイル</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
    <x-slot name="header">
        {{ __('ファイルリスト')}}
        </x-slot>
        <a href='/files/create'>ファイル新規登録</a>
       
        <div class='files'>
            @foreach ($files as $file)
                
                <div class='file'>
                    <h2>
                       <a href="/files/{{ $file->id }}" class='name'>{{ $file->name }}</a> 
                    </h2>
                    <a href="/lessons/{{ $file->lesson->id }}">{{ $file->lesson->name }}</a>
                     <form action="/files/{{ $file->id }}" id="form_{{ $file->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deleteFile({{ $file->id }})">delete</button> 
                    </form>
                </div>
            @endforeach
        </div>
        
        </div>
        <div class="footer">
        </div>
        </x-app-layout>
        <script>
            function deleteFile(id) {
                'use strict'

                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                    }
                }
        </script>
</html>
