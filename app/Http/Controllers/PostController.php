<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\TimeCategory;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }
    
    public function post()
    {
        $cities = [];
        $cities[] = [
            'name' => '東京',
            'img' => 'https://thumb.photo-ac.com/ae/aee6447b180bec197b5f72a69db9194d_t.jpeg',
            'href' => route('/'),
        ];
        $cities[] = [
            'name' => '愛知',
            'img' => 'https://thumb.photo-ac.com/a7/a73aab9b4136ac21c323d5b1c07dd920_t.jpeg',
            'href' => route('/'),
        ];
        $cities[] = [
            'name' => '大阪',
            'img' => 'https://thumb.photo-ac.com/5d/5d21881c7e6babcde6ff677c14ae9c35_t.jpeg',
            'href' => route('/'),
        ];
        $cities[] = [
            'name' => '仙台',
            'img' => 'https://thumb.photo-ac.com/5d/5d21881c7e6babcde6ff677c14ae9c35_t.jpeg',
            'href' => route('/'),
        ];
        $cities[] = [
            'name' => '札幌',
            'img' => 'https://thumb.photo-ac.com/5d/5d21881c7e6babcde6ff677c14ae9c35_t.jpeg',
            'href' => route('/'),
        ];

        // $get_datas = Post->get();
        // foreach($get_datas as $data){
        //     $cities[] = [
        //         'name' => $data->city_name,
        //         'img' => $data->img_src,
        //         'href' => route('city', ['id' => $data->id]),
        //     ];
        // }

        return view('posts.index', [
            'posts' => $post->get(),
            'cities' => $cities,
        ]);
    }
    
    public function create(Category $category,TimeCategory $time_category)
    {
        return view('posts.create')->with([
            'categories' => $category->get(),
            'time_categories' => $time_category->get() 
        ]);
    }
    
    
    public function show(Post $post)
    {
        return view('posts.show')->with(['posts' => $post->get()]);  
    }
    
    public function store(PostRequest $request,Post $post)
    {
        dd();
        $input = $request['post'];
        $images = $request->file('images');
        $post->fill($input)->save();
        $file = $req->file('post.images');
        $file_path = $file->store('public');
        Session::put('img_path', str_replace('public', 'storage', $file_path));
        return redirect('/posts/'.$post->id);
    }
}
