<?php

namespace App\Http\Controllers;

use App\Models\Menfess;
use Illuminate\Http\Request;

class MenfessController extends Controller
{
    //
    public function menfess(){
        return view('menfess.index', [
            'title' => 'Menfess',
            'active' => 'menfess',
            'menfess' => Menfess::all()
        ]);
    }
}
