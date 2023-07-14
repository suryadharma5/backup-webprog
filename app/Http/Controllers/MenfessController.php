<?php

namespace App\Http\Controllers;

use App\Models\Like;
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
            'menfess' => Menfess::latest()->filter(request(['search']))->get(),
        ]);
    }

    public function detail(Menfess $menfess){
        $user = auth()->user()->id;
        $like = Like::where('user_id', $user)->get();
        // dd($like);
        return view('menfess.menfess-detail', [
            'title' => 'Menfess',
            'active' => 'menfess',
            'menfess' => $menfess,
            'reply' => MenfessReply::where('menfess_id', $menfess->id)->get(),
            'like' => $like
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

    public function deleteMenfess(Request $request): RedirectResponse{
        $menfess = Menfess::findOrFail($request->menfess_id);
        $menfess->delete();

        return redirect()->back()->with('success', "Menfess anda berhasil dihapus");
    }

    public function searchMenfess(Request $request){
        if($request->ajax()){
            $menfess = Menfess::latest()->where('title', 'like', '%' . $request->search . '%')->get();

            foreach ($menfess as $men){
                echo '
                    <div class="card my-3">
                        <div class="card-body">
                            <div class="row d-flex mx-1">
                                <div class="col-10 my-1">
                                    <a href="/menfess/detail/'.$men->id.'" class="text-decoration-none text-black">
                                        <h3 class="card-title fw-bold">'.$men->title.'</h3>
                                    </a>
                                </div>
                                <div class="col my-1">
                                    <div class="row d-flex">
                                        <div class="col-1">
                                            <i class="fa-solid fa-heart fa-lg" style="color: #78a2cc;"></i>
                                        </div>
                                        <div class="col">
                                            <p style="color: #78A2CC">'.$men->total_likes.' likes</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col my-1" style="margin-left: -25px;">
                                    <div class="row d-flex">
                                        <div class="col-1">
                                            <i class="fa-solid fa-message" style="color: #78a2cc;"></i>
                                        </div>
                                        <div class="col">
                                            <p style="color: #78A2CC">'.$men->total_replies.' replies</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex mx-1 my-0">
                                <div class="col-1">
                                    <p class="card-text" style="color: gray">asked by</p>
                                </div>
                                <div class="col" style="margin-left: -38px">
                                    <p class="card-text" style="font-weight: bold;">'.$men->user->username.'</p>
                                </div>
                            </div>
                            <hr>
                            ';

                            if ($men->menfessReply->count()) {
                                echo '
                                <div class="row d-flex m-1">
                                    <div class="col-1">
                                        <img src="https://images.pexels.com/photos/771742/pexels-photo-771742.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Profile" style="border-radius: 50%; width: 50px; height:50px; object-fit: cover;">
                                    </div>
                                    <div class="col" style="margin-left: -30px">
                                        <p style="font-weight: bold;">'.$men->menfessReply[0]->users->username.'</p>
                                        <p style="margin-top: -20px; color: gray;">Worker Dad</p>
                                    </div>
                                    <div class="col text-end">
                                        <div class="dropdown-center">
                                            <i class="bi bi-three-dots-vertical titik-tiga" data-bs-toggle="dropdown" style=""></i>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i class="bi bi-exclamation-circle me-2"></i>Laporkan</a></li>';
                            
                                                if (auth()->user()) {
                                                    if ($men->menfessReply[0]->users->id == auth()->user()->id) {
                                                        echo '
                                                        <li><hr class="dropdown-divider"></li>
                                                        <form action="/menfess/detail/reply/'.$men->menfessReply[0]->id.'" method="POST">
                                                            <li onclick="return confirm(\'Apakah anda yakin?\')">
                                                                '.method_field('delete').'
                                                                '.csrf_field().'
                                                                <button type="submit" class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Hapus</button> 
                                                            </li>
                                                        </form>
                                                        ';
                                                    }
                                                }
                                            
                                                echo '
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                ';
                                            
                                if ($men->menfessReply[0]->reply_image) {
                                    echo '
                                    <div class="row mx-1">
                                        <img src="'.asset('storage/'.$men->menfessReply[0]->reply_image).'" class="card-img-top" alt="..." style="height: 380px; object-fit:cover;">
                                    </div>
                                    ';
                                }
                            
                                echo '
                                <div class="row m-1">
                                    <p>'.$men->menfessReply[0]->reply_text.'</p>
                                </div>
                                <div class="row text-center" style="margin-left: 30%; margin-right:30%;">
                                    <div class="tombol">
                                        <a href="/menfess/detail/'.$men->id.'" class="btn" style="background-color: #78A2CC; color:#FFF7F6;">See all replies  <i class="fa-solid fa-arrow-right fa-lg mx-2" style="color: #ffffff;"></i></a>
                                    </div>
                                </div>
                                ';
                            }
                        
                            echo '
                        </div>
                    </div>
                ';
            }
        }
    }

    public function like(Request $request){
        if($request->ajax()){
            $reply = MenfessReply::findOrFail($request->reply_id);
            $reply->like += 1;
            $reply->save();

            $user = auth()->user()->id;

            $like = new Like();
            $like->user_id = $user;
            $like->menfess_reply_id = $request->reply_id;
            $like->save();

            $reply_like = $reply->like;

            return response()->json([
                'like' => $reply_like,
            ]);

            // Like::create($likeData);

            // $response = $request->all();

            // return response()->json($response);
        }
    }

    public function unlike(Request $request){
        if($request->ajax()){
            $reply = MenfessReply::findOrFail($request->reply_id);
            $reply->like -= 1;
            $reply->save();

            $user = auth()->user()->id;

            $like = Like::where('user_id', $user)->where('menfess_reply_id', $reply->id)->delete();

            $reply_like = $reply->like;
            

            return response()->json([
                'like' => $reply_like,
            ]);

            // Like::create($likeData);

            // $response = $request->all();

            // return response()->json($response);
        }
    }
}
