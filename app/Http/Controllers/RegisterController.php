<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register',
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            //unique|dari table mana
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password'=> 'required|min:5|max:255'

        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);
 
        User::create($validatedData);

        //ini nanti akan dikirim ke halamann yang akan ditampilkan, yaitu login
        // $request->session()->flash('success', 'Registration successful!');

        return redirect('/login')->with('success', 'Registration successful!');

    }
}
