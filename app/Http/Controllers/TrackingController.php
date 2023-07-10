<?php

namespace App\Http\Controllers;

use App\Models\Janin;
use Illuminate\Http\Request;

class TrackingController extends Controller
{
    public function track(Request $request, Janin $janin){
        $encodedValue = "";
        $index = isset($_COOKIE['index']) ? $_COOKIE['index'] : $encodedValue;

        // print($index);
        $data = Janin::skip($index)->take(1)->first();
        $backgroundImage = $data->image_buah;
        return view('track.track', [
            'data' => $data,
            'backgroundImage' => $backgroundImage,
            'active' => 'track',
            'title' => 'Tracking'
        ]);

    }
}
