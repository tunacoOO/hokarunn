<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ホカるん投稿</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" href="./css/create.css">
    </head>
    <body>
        <x-app-layout>
            <form action="/posts" method="POST">
                @csrf
                <div class="post_images">
                    <input type="file" name="test">
                </div>
                <div class="post_body">
                    <textarea name="post_body" placeholder="みんなにこれを伝えたい！"></textarea>
                </div>
                //県名、ホテル選択　カテゴリー化する
                <div class="time">
                    <input type="checkbox" name="time" value="breakfast">
                    <label for="breakfast">朝食</label>
                </div>
                <div class="time">
                    <input type="checkbox" name="time" value="lunch">
                    <label for="lunch">昼食</label>
                </div>
                <div class="time">
                    <input type="checkbox" name="time" value="dinner">
                    <label for="dinner">夕食</label>
                </div>
                <div class="time">
                    <input type="checkbox" name="time" value="afternoon">
                    <label for="afternoon">アフタヌーンティー</label>
                </div>
                <div class="time">
                    <input type="checkbox" name="time" value="service">
                    <label for="service">サービス</label>
                </div>
                <input type="submit" value="投稿する"/>
            </form>
            <div class="fotter">
                <a href="/">back</a>
            </div>
        </x-app-layout>
    </body>