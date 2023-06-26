<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function index (){
        return view('ratingNreview.index', [
            'title' => 'Rating and review',
            'active' => 'rating'
        ]); 
    }

    public function coba (){
        return view('ratingNreview.indexes', [
            'title' => 'Rating and review',
            'active' => 'rating'
        ]); 
    }
}
