<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Models\Menfess;
use App\Models\Product;
use App\Models\MenfessReply;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(){
        return view('index', [
            'title' => 'Hamily',
            'active' => 'home',
            'articles' => article::latest()->paginate(3),
            'menfess' => Menfess::latest()->paginate(5),
            'products' => Product::latest()->paginate(5),
        ]);
    }
}
