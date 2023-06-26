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
            'biodata' => 'required|max:100',
            
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
            // dd($request);
            // $fileimage = $request->file('gambar');
            // $imagename = $request->nim.".".$fileimage->getClientOriginalExtension(); //sebelum mengakhiri dengan extension kita bisa nambah dengan nama image dengan nim
            // $pathimage = Storage::disk('public')->putFileAs('upload/mahasiswa', $fileimage, $imagename); //menyimpan di dalam storage di dalame folder public
            // // dd($pathimage);
            // // Storage::disk('public')->putFileAs();

            // $mhs = CrudMahasiswaModel::create([
            //     'nim' => $request->nim,
            //     'nama' => $request->nama,
            //     'gambar' => $imagename,
            // ]);

            return redirect()->back()->with('message', 'Your profile has been updated');
        }

    }
}
