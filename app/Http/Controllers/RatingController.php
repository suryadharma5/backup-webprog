<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function index(){
        return view('ratingNreview.index', [
            'title' => 'Rating n Review',
            'active' => 'rating',
            'products' => Product::latest()->filter(request(['search']))->get(),
        ]);
    }

    public function prodSearch(Request $request){
        if($request->ajax()){
            $products = Product::where('name_product', 'like', '%'.$request->search. '%')->get();
            // $products = Product::latest();
            // dd($request);
            // return view('index', [
            //     'title' => 'Rating n Review',
            //     'active' => 'rating',
            //     'products' => $products->where('name_product', 'like', '%'.$request->search. '%')->get(),
            // ]); 
            foreach ($products as $prod){
                "<div class='col-lg-5 mb-4' style='margin-right: 100px'>
                <a href='/rating/detail/$prod->id' class='text-decoration-none text-black'>
                  <div class='scroll-area-rating d-flex'>
                    <div class='foto-produk'>
                     <?php if ($prod->form_image) : ?>
                        <img src='asset('storage/'. $prod->form_image)' alt='' class='img-fluid img-thumbnail' style='max-width: 148px;min-height: 282px ;overflow: hidden;'>
                        <?php endif; ?>
                      <img src='$prod->form_image' alt=''>
                    </div>
                    <div class='isi ms-4'>
                      <div class='nama-produk my-0'>
                        $prod->name_product
                      </div>
                      <div class='jenis-produk'>
                        $prod->type_product
                      </div>
                      <div class='count'>
                        <div class='rating'>
                          <span class='fa fa-star <?php $prod->rating >= 1 ? 'checked' : ''?></span>
                          <span class='fa fa-star <?php $prod->rating >= 2 ? 'checked' : ''?></span>
                          <span class='fa fa-star <?php $prod->rating >= 3 ? 'checked' : ''?></span>
                          <span class='fa fa-star <?php $prod->rating >= 4 ? 'checked' : ''?></span>
                          <span class='fa fa-star <?php $prod->rating >= 5 ? 'checked' : ''?></span>
                        </div>
                        <div class='average-rating'>
                          &nbsp; $prod->rating&nbsp;
                        </div>
                        <div class='total-rating'>
                          ($prod->total_review <?php ($prod->total_review > 1) ? 'peoples' : 'people) 
                        </div>
                      </div>
                      <hr>
                      <?php if (count($prod->reviews)) : ?>
                        <div class='person'>
                          <div class='jarakwokwok'>
                            <div class='foto-profile'>
                              <img src='/img/section4_profile-picture.png' alt=''>
                            </div>
                            <div class='nama-person ms-2'>
                            $prod->reviews[0]->user->username
                            </div>
                          </div>

                          <a class='lanjut' href='/rating/detail/$prod->id'>
                            (ALL REVIEWS)
                          </a>

                        </div>
                        <div class='rekomen' style='background-color: ($prod->reviews[0]->recommend == 1) ? '#BDFFBC' : '#FFBCBC''>
                          <div class='jempol'>
                            <img src='/img/($prod->reviews[0]->recommend == 1) ? 'section4_jempol-rekomen.png' : 'section4_jempol-nonrekomen.png' alt=''>
                          </div>
                          <div class='rekomendesc' style='color:  ($prod->reviews[0]->recommend == 1) ? '#5EC75C' : '#C75C5C'>
                            &nbsp; $prod->reviews[0]->user->username ($prod->reviews[0]->recommend == 1) ? 'merekomendasikan ini' : 'tidak merekomendasikan ini
                          </div>
                        </div>
                        <div reviews>
                          <p>
                            $prod->reviews[0]->comment
                          </p>
                        </div>
                        <?php endif?>
                    </div>
                  </div>
                </a>
              </div>";
            }
              
              
            
        }
    }

    public function detailRating(Product $prod){
        return view('ratingNreview.detailrating', [
            'title' => 'Rating n Review',
            'active' => 'rating',
            'product' => $prod,
            'review' => Review::where('product_id', $prod->id)->get()    
        ]);
    }

}
