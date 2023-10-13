<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ホカるん</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600">
        <link rel="stylesheet" href="./css/show.css">
    </head>
    <body>
        <x-app-layout>
             <h1 style="padding: 1rem; display: flex; font-size: 1.5rem">
                <img style="height: 1em" src="{{ asset('images/dish_icon/' . $category->code . '.jpg') }}" alt="{{ $category->name }}">
                {{ $category->name }}
            </h1>
            <hr>
            <div class='posts'>
                @foreach ($posts as $post)
                    <div class='post' style="margin-bottom: 1em; padding: 1em; border: 1px solid black; border-radius: 5px; display: flex;">
                        <div style="width: 5em;">
{{--                            <img src="{{ asset('images/dish_post/' . $post->images) }}" alt={{"投稿画像" . $post->id}}>--}}
                            <img src="{{ asset('images/dish_icon/chinese.jpg') }}" alt={{"投稿画像" . $post->id}}>
                        </div>
                        <div style="margin-left: 1em;">
                            <p class='body'>{{ $post->body }}</p>
                            <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                            <a href="/time_categories/{{ $post->time_category->id }}">{{ $post->time_category->name }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </x-app-layout>
    </body>