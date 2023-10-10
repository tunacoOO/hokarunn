<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function show()
    {
        $articles = Article::query()
            ->with(['user', 'likes', 'tags', 'comments'])
            ->orderBy('created_at', 'desc')
            ->paginate(15);

        $data = [
            'articles' => $articles,
        ];

        return view('posts.show', $data);
    }
    
    public function create()
    {
        $prefs = config('pref');

        $user = Auth::user();

        $data = [
            'user' => $user
        ];

        return view('posts.create', $data)->with(['prefs' => $prefs]);
    }

    public function store(ArticleRequest $request, Article $article)
        {
            $article->user_id = $request->user()->id;
            $all_request = $request->all();
            $article->pref_id = $request->pref;
            $article->fill($all_request)->save();
    
            return redirect()->route('posts.index');
        }
    
     public function search(Request $request)
    {
        $articles = Article::searchFilter($request->search)
            ->prefFilter($request->pref)
            ->orderBy('created_at', 'desc')
            ->with(['user', 'likes', 'tags'])
            ->paginate(10);

        $data = [
            'articles' => $articles,
        ];

        return view('posts.index', $data);
    }
}
