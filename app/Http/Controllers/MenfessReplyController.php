<?php

namespace App\Http\Controllers;

use App\Models\Menfess;
use App\Models\MenfessReply;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class MenfessReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {
        // dd($request->file('reply_image')->store('reply-images'));
        // return $request->file('reply_image')->store('reply-images');
        $validatedData = $request->validate([
            'reply_text' => 'required|max:700',
            'menfess_id' => 'required',
            'reply_image' => 'image|file|max:1024'
        ]);

        if ($request->file('reply_image')) {
            $validatedData['reply_image'] = $request->file('reply_image')->store('reply-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        MenfessReply::create($validatedData);

        return redirect('/menfess')->with('success', 'Jawaban anda berhasil diunggah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menfessReply = MenfessReply::find($id);
        // dd($menfessReply);

        if($menfessReply->reply_image){
            Storage::delete($menfessReply->reply_image);
        }
        $menfessReply->delete(  );
        return redirect('/menfess')-> with('success', 'Jawaban berhasil dihapus');
    }
}
