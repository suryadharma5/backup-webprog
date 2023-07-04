<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function index(){
        return view('ratingNreview.index', [
            'title' => 'Rating n Review',
            'active' => 'rating',
            'products' => Product::all(),
        ]);
    }

    public function detailRating(){
        return view('ratingNreview.detailrating', [
            'title' => 'Rating n Review',
            'active' => 'rating',
        ]);
    }

    public function formRating(){
        return view('ratingNreview.indexes', [
            'title' => 'Rating n Review',
            'active' => 'rating',
        ]);
    }
}
