<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        return view('article.index', [
            'title' => 'Article',
            'active' => 'article',
            'articles' => article::all(),
        ]);
    }

    public function detail(){
        return view('article.article-detail', [
            'active' => 'article',
        ]);
    }
}
