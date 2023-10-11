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
    public function index(Category $category,TimeCategory $time_category)
    {
        if($prefs = config('pref')){
            return view('posts.index')->with(['prefs' => $prefs]);
        }else{
            return view('posts.index')->with([
                'categories' => $category->get(),
                'time_categories' => $time_category->get()]);}
    
    }
    
    public function search(PostRequest $request,Category $category)
    {
        return view('post.show')->with(['categories' => $category->get()]);
        $category_id = $request->input('category');
        
        if($category_id == ""){
            $posts = Post::all();
        }else{
            $post = Post::where('category_id',$category_id)->get();
        }
       
    }
    
    
    public function create(Category $category,TimeCategory $time_category)
    {
        if($prefs = config('pref')){
            return view('posts.create')->with(['prefs' => $prefs]);
        }else{
            return view('posts.create')->with([
                'categories' => $category->get(),
                'time_categories' => $time_category->get()]);}
                
    }
    
    
    public function show(Post $post)
    {
        return view('posts.show')->with(['posts' => $post->get()]);  
    }
    
    public function store(PostRequest $request,Post $post)
    {
        $input = $request['post'];
        $images = $request->file('images');
        $post->fill($input)->save();
        $post->prefecture = $request->input('prefecture');
        $file = $request->file('post.images');
        $file_path = $file->store('public');
        Session::put('img_path', str_replace('public', 'storage', $file_path));
        return redirect('/posts/'.$post->id);
    }
    
    public function edit(Post $post,Category $category,TimeCategory $time_category)
    {
        return view('posts.edit')->with([
            'post' => $post,
            'categories' => $category->get(),
            'time_categories' => $time_category->get(),
            ]);
    }
    
    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $images = $request->file('images');
        $post->fill($input)->save();
        $post->prefecture = $request->input('prefecture');
        $file = $request->file('post.images');
        $file_path = $file->store('public');
        Session::put('img_path', str_replace('public', 'storage', $file_path));
        return redirect('/posts/' . $post->id);
    }
    
    public function delete(Post $post)
        {
            $post->delete();
            return redirect('/');
        }

}
