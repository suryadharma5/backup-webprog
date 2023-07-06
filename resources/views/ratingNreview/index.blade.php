@extends('layout.main')

@section('title')
    <title>Hamily | {{ $title }}</title>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/home1.css">
@endsection

@section('contents')
    <div class="container">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show col-lg-12 mt-3" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session()->has('failed'))
            <div class="alert alert-danger alert-dismissible fade show col-lg-12 mt-3" role="alert">
                {{ session('failed') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="search-bar d-flex flex-row mt-4">
            <div class="col-lg-5 d-flex flex-row py-2">
                <div class="input-group col-lg" style="border-color:#FFB8C7; border-style: solid; text-align: right ; border-radius: 7px">
                    <input type="text" class="form-control" placeholder="Search Product" name="search" >
                    <button class="btn border-0 bg-transparent" type="submit" id="button-addon2"><i class="bi bi-search fa-1x col-lg-4" style="color: #78A2CC; -webkit-text-stroke: 1px;"></i></button>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5 py-2 px-2" style="margin-left: 15px">
                <a href="/rating/form" class="text-decoration-none text-white">
                    <div class="d-flex justify-content-center py-2" style="background-color: #FFB8C7; border-radius: 10px">
                        <h5 class="fw-bold">Add Product</h5>
                    </div>
                </a>
            </div>
        </div>
        <h3 class="mt-4 fw-bold"> Popular Products</h3>
        <div class="mt-4 row">
            @foreach ($products as $prod)
              {{-- @dd( $prod->reviews[0]->user->username) --}}
              <div class="col-lg-5 mb-4" style="margin-right: 100px">
                <a href="/rating/detail/{{ $prod->name_product }}" class="text-decoration-none text-black">
                  <div class="scroll-area-rating d-flex">
                    <div class="foto-produk">
                      <img src="/img/section4_photo-product.png" alt="">
                    </div>
                    <div class="isi">
                      <div class="nama-produk">
                        {{ $prod->name_product }}
                      </div>
                      <div class="jenis-produk">
                        {{ $prod->type_product }}
                      </div>
                      <div class="count">
                        <div class="rating">
                          <span class="fa fa-star {{ ($prod->rating >= 1) ? 'checked' : ''}}"></span>
                          <span class="fa fa-star {{ ($prod->rating >= 2) ? 'checked' : ''}}"></span>
                          <span class="fa fa-star {{ ($prod->rating >= 3) ? 'checked' : ''}}"></span>
                          <span class="fa fa-star {{ ($prod->rating >= 4) ? 'checked' : ''}}"></span>
                          <span class="fa fa-star {{ ($prod->rating >= 5) ? 'checked' : ''}}"></span>
                        </div>
                        <div class="average-rating">
                          &nbsp; {{ $prod->rating }}&nbsp;
                        </div>
                        <div class="total-rating">
                          ({{ $prod->total_review }} {{ ($prod->total_review > 1) ? 'peoples' : 'people'}}) 
                        </div>
                      </div>
                      <hr>
                      @if ({{ $prod->reviews[0]->user->count() }})
                        <div class="person">
                          <div class="jarakwokwok">
                            <div class="foto-profile">
                              <img src="/img/section4_profile-picture.png" alt="">
                            </div>
                            <div class="nama-person">
                              {{ $prod->reviews[0]->user->username }}
                            </div>
                          </div>

                          <a class="lanjut" href="/rating/detail/{{ $prod->name_product }}">
                            (ALL REVIEWS)
                          </a>

                        </div>
                        <div class="rekomen">
                          <div class="jempol">
                            <img src="/img/section4_jempol-rekomen.png" alt="">
                          </div>
                          <div class="rekomendesc">
                            &nbsp; NURHAYATI 1 recommends this product!
                          </div>
                        </div>
                        <div reviews>
                          <p>
                            sabun nya wangi banget, anakku jadi seneng kalo mandi xixixi
                          </p>
                        </div>
                      @endif
                    </div>
                  </div>
                </a>
              </div>
            @endforeach
          </div>
    </div>
@endsection
