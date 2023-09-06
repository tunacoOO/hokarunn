<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return $post->get();
    }
    
    public function post()
    {
       return view('posts.index')->with(['posts' => $post->get()]); 
    }
    
    public function create()
    {
        return view('posts.create');
    }
}
