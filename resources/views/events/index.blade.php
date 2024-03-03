<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Event</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
    <x-slot name="header">
        {{ __('イベント一覧')}}
        </x-slot>
        <a href='/events/create'>イベント新規登録</a>
       
        <div class='events'>
            @foreach ($events as $event)
                <div class='event'>
                    <h2>
                       <a href="/events/{{ $event->id }}" class='name'>{{ $event->name }}</a> 
                    </h2>
                     <form action="/events/{{ $event->id }}" id="form_{{ $event->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn" type="button" onclick="deleteEvent({{ $event->id }})">delete</button> 
                    </form>
                </div>
            @endforeach
        </div>
        <div class="footer">
        </div>
    </x-app-layout>
        <script>
            function deleteEvent(id) {
                'use strict'

                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                    }
                }
        </script>
</html>
