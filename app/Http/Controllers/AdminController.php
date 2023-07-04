<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard', [
            'on' => 'dashboard',
            'users' => User::all(),
        ]);
    }

    public function hospital(){
        return view('admin.hospital', [
            'on' => 'hospital'
        ]);
    }

    public function doctor(){
        return view('admin.doctor', [
            'on' => 'doctor'
        ]);
    }


    public function article(){
        return view('admin.article', [
            'on' => 'article'
        ]);
    }
}
