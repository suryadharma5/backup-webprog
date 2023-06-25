<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function index(){
        return view('rating.detailrating', [
            'title' => 'rating',
            'active' => 'rating'
        ]);
    }
}
