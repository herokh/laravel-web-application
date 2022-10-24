<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class PublicController extends BaseController
{
    public function index(Request $r)
    {
        $id = $r->query('id');
        $article = Article::query()->where('id', $id)->first();
        $comments = Comment::query()->where('article_id', $article->id)->get();
        return view('welcome', ['article' => $article, 'comments' => $comments]);
    }
}
