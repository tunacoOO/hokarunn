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
            <form action="{{route('posts.all')}}" style="margin-top: 1rem;">
                <select name="category_id">
                    <option value="">カテゴリー</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <input type="text" name="body" placeholder="投稿内容">
                <button>検索</button>
            </form>
            
            <a href="{{route('posts.all')}}">投稿一覧</a>

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
                 <div>
                     @foreach($categories as $category)
                         <div class="rsttop-othersearch__item">
                             <a href="{{route('category.show', ['category' => $category->id])}}">
                                 <img src="{{ asset('images/dish_icon/' . $category->code . '.jpg') }}" alt="{{ $category->name }}">
                             </a>
                         </div>
                     @endforeach
                 </div>

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