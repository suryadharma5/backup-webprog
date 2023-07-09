<?php

namespace App\Http\Controllers;

use App\Models\Menfess;
use App\Models\MenfessReply;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;

class MenfessController extends Controller
{
    //
    public function index(){
        return view('menfess.index', [
            'title' => 'Menfess',
            'active' => 'menfess',
            'menfess' => Menfess::all(),
        ]);
    }

    public function detail(Menfess $menfess){
        return view('menfess.menfess-detail', [
            'title' => 'Menfess',
            'active' => 'menfess',
            'menfess' => $menfess,
            'reply' => MenfessReply::where('menfess_id', $menfess->id)->get(),
        ]);
    }

    public function postMenfess(){
        return view('menfess.post', [
            'title' => 'Menfess',
            'active' => 'menfess'
        ]);
    }

    public function addMenfess(Request $request){

        $rules = [
            'question' => 'required|min:3|max:500',
            'user_id' => 'required'
        ];
        $id = [
            'required' => ':attribute must be filled',
            'min' => 'minimal has :min characters',
        ];

        $validator = Validator::make($request->all(), $rules, $id);
        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }else{          
            $menfess = new Menfess();
            $menfess->title = $request->question;
            $menfess->user_id = $request->user_id;
            $menfess->save();
            // $menfess->menfess_image = $path;

            // return redirect()->route('postMenfess')->with('success', 'Your menfess has been sent.');
            return redirect('/menfess')->with('success', "Menfess anda berhasil diunggah");
        }
    }

    public function myMenfess(User $user){
        // dd($user);
        $menfess = Menfess::where('user_id', $user->id)->get();
        return view('menfess.edit', [
            'title' => 'Menfess',
            'active' => 'menfess',
            'menfess' => $menfess
        ]);
    }

    public function updateMenfess(Request $request): RedirectResponse{
        // dd($request);
        $menfess = Menfess::findOrFail($request->menfess_id);
        $user = User::findOrFail($request->user_id);

        $request->validate([
            'title' => 'required|max:255',
        ]);

        $menfess->title = $request->title;
        $menfess->save();
        // return redirect('/menfess')->with('success', "Your menfess has been updated");
        return redirect('/menfess/myMenfess/'. $user->username)->with('success', "Menfess anda berhasil diperbaharui");
    }

    public function deleteMenfess($id): RedirectResponse{
        $menfess = Menfess::find($id);
        $menfess->delete();

        return redirect('menfess')
            ->with("updated",1)
            ->with('message', "Your menfess has been deleted.");
    }
}
