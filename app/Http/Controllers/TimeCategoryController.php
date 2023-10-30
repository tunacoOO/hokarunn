<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\TimeCategory;
use App\Models\Category;
use Illuminate\Database\Eloquent\SoftDeletes;


class TimeCategoryController extends Controller
{
     public function time(TimeCategory $time_category)
    {
        $posts_rel = $time_category->posts()->get();
        $post = new Post;

        return view('categories.time')->with([
            'time_category' => $time_category,
            'posts' => $posts_rel,
        ]);}
        
        public function edit(Post $post,Category $category,TimeCategory $time_category)
    {
        
         $pref = config('pref');
        return view('posts.edit')->with([
            'pref' => $pref,
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
