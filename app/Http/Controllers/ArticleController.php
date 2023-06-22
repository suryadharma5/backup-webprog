<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        return view('article.index', [
            'title' => 'Article',
            'active' => 'article'
        ]);
    }

    public function detail(){
        return view('article.article-detail', [
            'active' => 'article',
        ]);
    }
}
