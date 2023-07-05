<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Review;
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

    public function detailRating(Product $prod){
        return view('ratingNreview.detailrating', [
            'title' => 'Rating n Review',
            'active' => 'rating',
            'product' => $prod,
            'review' => Review::where('product_id', $prod->id)->get()    
        ]);
    }

    public function formRating(){
        return view('ratingNreview.indexes', [
            'title' => 'Rating n Review',
            'active' => 'rating',
        ]);
    }
}
