<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        $posts_rel = $category->posts()->get();

        return view('categories.show')->with([
            'category' => $category,
            'posts' => $posts_rel,
        ]);
    }
    
    
}
