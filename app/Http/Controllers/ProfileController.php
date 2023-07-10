<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function updateprofile(Request $request){

        $rules = [
            'username' => 'required|alpha_num:ascii',
            'firstname' => 'required',
            'lastname' => 'required',
            'dob' => 'required|date|before:today',
            'nik' => 'required|digits:16',
            'email' => 'required|email:rfc,dns',
            'phonenumber' => 'required|digits_between:10,13',
            'biodata' => 'required',
            
        ];

        $id = [
            'required' => ':attribute is required',
            'min' => ':attribute contains at least :min characters',
            'max' => ':attribute containa maximum :max characters'
        ];

        $validator = Validator::make($request->all(), $rules, $id);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }else{
            auth()->user()->update([
                'username' => $request->username,
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'dob' => $request->dob,
                'nik' => $request->nik,
                'email' => $request->email,
                'phone_number' => $request->phonenumber,
                'biodata' => $request->biodata
            ]);

            return redirect()->back()->with('message', 'Your profile has been updated');
        }

    }
}
