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
            <h1>Blog Name</h1>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='images'>{{ $post->images }}</h2>
                    <img src="{{ asset(session('img_path')) }}" alt="">
                    <p class='body'>{{ $post->body }}</p>
                    <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                    <a href="/time_categories/{{ $post->time_category->id }}">{{ $post->time_category->name }}</a>
                </div>
            @endforeach
        </div>
        </x-app-layout>
    </body>