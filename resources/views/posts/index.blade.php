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
            <a href='/posts/create'>投稿する</a>
             <section class="rsttop-area-search__main">
                <div class="rsttop-search__heading">
                     <h2 class="rsttop-search__title">《エリアから探す》</h2>
                </div>
                <ul class="rsttop-area-search__list">
                    <li class="rsttop-area-search__items">
                        <div class="rsttop-area-search__item">
                            <img src="https://thumb.photo-ac.com/ae/aee6447b180bec197b5f72a69db9194d_t.jpeg">
                            <p>東京</p>
                        </div>
                        <div class="rsttop-area-search__item">
                            <img src="https://thumb.photo-ac.com/a7/a73aab9b4136ac21c323d5b1c07dd920_t.jpeg">
                            <p>愛知</p>
                        </div>
                        <div class="rsttop-area-search__item">
                            <img src="https://thumb.photo-ac.com/5d/5d21881c7e6babcde6ff677c14ae9c35_t.jpeg">
                            <p>大阪</p>
                        </div>
                         //県名とそれに付随する写真を貼るー＞それをクリックするとそこから投稿に飛べる
                    </li>
                 </ul>
             </section>
             <secion class="rsttop-othersearch__main">
                 <div class="rsttop-search__heading">
                     <h2 class="rsttop-search__title">《料理カテゴリーから探す》</h2>
                 </div>
                 <ul class="rsttop-othersearch__list">
                     <li class="rsttop-othersearch__items">
                         <div class="rsttop-othersearch__item">
                             <a href="#">
                                 <img  src="{{ asset('images/IMG_1291.jpg') }}" alt="和食">
                             </a>
                         </div>
                         <div class="rsttop-othersearch__item">
                             <a href="#">
                                <img src="{{ asset('images/IMG_1290.jpg') }}" alt="中華">
                             </a>
                         </div>
                         <div class="rsttop-othersearch__item">
                             <a href="#">
                                <img src="{{ asset('images/IMG_1293.jpg') }}" alt="イタリアン">
                             </a>
                         </div>
                         <div class="rsttop-othersearch__item">
                             <a href="#">
                                <img src="{{ asset('images/IMG_1295.jpg') }}" alt="フレンチ">
                             </a>
                         </div>
                         <div class="rsttop-othersearch__item">
                             <a href="#">
                                <img src="{{ asset('images/IMG_1294.jpg') }}" alt="ブッフェ">
                             </a>
                         </div>
                     </li>
                 </ul>
             </secion>
             <section class="rsttop-servicesearch__main">
                 <div class="rsttop-search__heading">
                     <h2 class="rsttop-search__title">《状況から探す》</h2>
                 </div>
                 <ul class="rsttop-servicesearch__list">
                     <li class="rsttop-servicesearch__items">
                         <div class="rsttop-servicesearch__item">
                             <a href="#">
                                <img src="" alt="朝食">
                             </a>
                         </div>
                         <div class="rsttop-servicesearch__item">
                             <a href="#">
                                 <img src="" alt="昼食">
                             </a>
                         </div>
                         <div class="rsttop-servicesearch__item">
                             <a href="#">
                                 <img src="" alt="夕食">
                             </a>
                         </div>
                         <div class="rsttop-servicesearch__item">
                             <a href="#">
                                <img src="" alt="アフタヌーンティー">
                             </a>
                         </div>
                         <div class="rsttop-servicesearch__item">
                             <a href="#">
                                <img src="" alt="サービス">
                             </a>
                         </div>
                         //ルームサービスやアフタヌーンティー、朝食夕食等をカテゴリー化
                     </li>
                 </ul>
             </section>
             <secion class="rsttop-postsearch__main">
                 <div class="rsttop-postsearch__heading">
                     <h2 class="rsttop-search__title">《みんなの投稿》</h2>
                 </div>
                 <ul class="rsttop-postsearch__list">
                     <li class="rsttop-postsearch__item">
                         //４つくらい抜粋した投稿が表示される
                     </li>
                     <buttun type="buttun" name="buttun" value="value">もっと見る</buttun>
                 </ul>
             </secion>
         </x-app-layout>
    </body>
</html>