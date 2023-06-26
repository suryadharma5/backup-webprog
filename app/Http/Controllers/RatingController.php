<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function index(){
        return view('ratingNreview.popular', [
            'title' => 'Rating n Review',
            'active' => 'rating',
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
