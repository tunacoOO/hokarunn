<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ホカるん</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600">
        <link rel="stylesheet" href="{{ asset('./css/index.css') }}">
    </head>
    <body>
        <x-app-layout>
            <form  action= "サイトURL" method="get" size=40>　　//サイトURL入れる
                <input type="search" name="search" placeholder="キーワードを入力">
                <input type="submit" name="submit" value="検索">
            </form>
            <a href='/posts/'>show</a>
             <section class="rsttop-area-search__main">
                <div class="rsttop-search__heading">
                     <h2 class="rsttop-search__title">〚エリアから探す〛</h2>
                     <div class="js-japanMap">
                         <script src="{{ asset('/blog/resources/js/japan-map.js') }}"></script>
                     </div>
                </div>
             </section>
             <secion class="rsttop-othersearch__main">
                 <div class="rsttop-search__heading">
                     <h2 class="rsttop-search__title">〚料理カテゴリーから探す〛</h2>
                 </div>
                 <ul class="rsttop-othersearch__list">
                     <li class="rsttop-othersearch__items">
                         <div class="rsttop-othersearch__item">
                             <a href="#">
                                 <img  src="{{ asset('images/IMG_1329.jpg') }}" alt="和食">
                             </a>
                         </div>
                         <div class="rsttop-othersearch__item">
                             <a href="#">
                                <img src="{{ asset('images/IMG_1330.jpg') }}" alt="中華">
                             </a>
                         </div>
                         <div class="rsttop-othersearch__item">
                             <a href="#">
                                <img src="{{ asset('images/IMG_1331.jpg') }}" alt="イタリアン">
                             </a>
                         </div>
                         <div class="rsttop-othersearch__item">
                             <a href="#">
                                <img src="{{ asset('images/IMG_1332.jpg') }}" alt="フレンチ">
                             </a>
                         </div>
                         <div class="rsttop-othersearch__item">
                             <a href="#">
                                <img src="{{ asset('images/IMG_1333.jpg') }}" alt="ブッフェ">
                             </a>
                         </div>
                     </li>
                 </ul>
             </secion>
             <section class="rsttop-servicesearch__main">
                 <div class="rsttop-search__heading">
                     <h2 class="rsttop-search__title">〚状況から探す〛</h2>
                 </div>
                 <ul class="rsttop-servicesearch__list">
                     <li class="rsttop-servicesearch__items">
                         <div class="rsttop-servicesearch__item">
                             <a href="#">
                                <img src="{{ asset('images/IMG_1334.jpg') }}" alt="朝食">
                             </a>
                         </div>
                         <div class="rsttop-servicesearch__item">
                             <a href="#">
                                 <img src="{{ asset('images/IMG_1335.jpg') }}" alt="昼食">
                             </a>
                         </div>
                         <div class="rsttop-servicesearch__item">
                             <a href="#">
                                 <img src="{{ asset('images/IMG_1336.jpg') }}" alt="夕食">
                             </a>
                         </div>
                         <div class="rsttop-servicesearch__item">
                             <a href="#">
                                <img src="{{ asset('images/IMG_1337.jpg') }}" alt="アフタヌーンティー">
                             </a>
                         </div>
                         <div class="rsttop-servicesearch__item">
                             <a href="#">
                                <img src="{{ asset('images/IMG_1338.jpg') }}" alt="サービス">
                             </a>
                         </div>
                         //ルームサービスやアフタヌーンティー、朝食夕食等をカテゴリー化
                     </li>
                 </ul>
             </section>
             <secion class="rsttop-postsearch__main">
                 <div class="rsttop-postsearch__heading">
                     <h2 class="rsttop-search__title">〚みんなの投稿〛</h2>
                 </div>
                 <ul class="rsttop-postsearch__list">
                     <li class="rsttop-postsearch__item">
                         //４つくらい抜粋した投稿が表示される
                     </li>
                     <buttun type="buttun" name="buttun" value="value">もっと見る</buttun>
                 </ul>
             </secion>
         </x-app-layout>
         <script src="{{ asset('/blog/public/jQuery/jquery-3.7.1.min.js') }}"></script>
         <script src="{{ asset('/blog/public/jQuery/jquery.japan-map.min.js') }}"></script>
    </body>
</html>