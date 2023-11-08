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
                            <img src="{{ asset('img_path') }}" alt={{"投稿画像" . $post->id}}>
                        </div>
                        <div style="margin-left: 1em;">
                            <p class='body'>{{ $post->body }}</p>
                            <p>{{ $post->prefName }}</p>
                            <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                            <a href="/time_categories/{{ $post->time_category->id }}">{{ $post->time_category->name }}</a>
                           
                            @if($post->user_id == Auth::id())
                            <div style="display: flex; justify-content: end; align-items: end">
                                <div class="edit" style="margin-right: 1rem"><a href="{{route('posts.edit', ['post' => $post->id])}}">edit</a></div>
                                <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" onclick="deletePost({{ $post->id }})">delete</button>
                                </form>
                            </div>
                            @endif
                        <div style="text-align: right; color: red;">
                            <small style="margin-left: 2rem;">{{is_null($post->user) ? '': $post->user->name}}</small>
                        </div>
                    </div>
                </div>
                        </div>
                    </div>
                @endforeach
            </div>
            
            <script>
            function deletePost(id) {
                'use strict'
        
                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
        </x-app-layout>
    </body>