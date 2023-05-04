<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        return view('article.index', [
            'title' => 'article',
            'active' => 'article'
        ]);
    }
}
