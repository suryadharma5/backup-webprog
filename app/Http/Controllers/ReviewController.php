<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Faker\Core\Number;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        // dd($validatedData);
        // dd($request);
        $validatedData = $request->validate([
            'rate' => 'required',
            'comment' => 'required|max:500|min:2',
            'recommend' => 'required',
            'product_id' => 'required',
            'reply_photo' => 'image|file|max:1024'
        ]);
        
        if ($request->file('reply_photo')) {
            $validatedData['reply_photo'] = $request->file('reply_photo')->store('review-images');
        }


        $validatedData['user_id'] = auth()->user()->id;

        $user = Auth::user();
        
        // dd(count($user->reviews));
        for($i = 0; $i < count($user->reviews); $i++){
            if($user->reviews[$i]->product->id == $request->product_id){
                return redirect('/rating')->with('failed', 'Anda sudah pernah memberi review pada product ini');
            };
        }
        
        $product = Product::findOrFail($request->product_id);
        $product->rating += $request->rate;
        $product->total_review++;
        $product->rating /= $product->total_review;
        $product->rating = round($product->rating, 1);
        $product->save();

        // dd($product);


        Review::create($validatedData);

        return redirect('/rating')->with('success', 'Review sukses ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {

        $product = Product::findOrFail($review->product_id);
        $product->rating -= $review->rate;
        $product->total_review--;
        if($product->total_review != 0){
            $product->rating /= $product->total_review;
        }else {
            $product->rating = 0;
        }

        $product->rating = round($product->rating, 1);
        $product->save();

        // Review::destroy($review->id);
        $review->delete();
        // dd($review);
        return redirect('/rating')-> with('success', 'Review berhasil dihapus');
    }
}
