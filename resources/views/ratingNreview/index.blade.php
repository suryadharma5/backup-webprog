@extends('layout.main')

@section('title')
    <title>Hamily | {{ $title }}</title>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/home1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
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
                <form class="input-group col-lg" style="border-color:#FFB8C7; border-style: solid; text-align: right ; border-radius: 7px" action="/rating">
                    <input type="text" class="form-control" placeholder="Search Product" name="search" id="search" value="{{ request('search') }}">
                    <button class="btn border-0 bg-transparent" type="submit" id="button-addon2"><i class="bi bi-search fa-1x col-lg-4" style="color: #78A2CC; -webkit-text-stroke: 1px;"></i></button>
                </form>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5 py-2 px-2" style="margin-left: 15px">
                <a href="/rating/product" class="text-decoration-none text-white">
                    <div class="d-flex justify-content-center py-2" style="background-color: #FFB8C7; border-radius: 10px">
                        <h5 class="fw-bold">Add Product</h5>
                    </div>
                </a>
            </div>
        </div>
        <h3 class="mt-4 fw-bold"> Popular Products</h3>
        <div class="mt-4 row" id="productGila">
            @foreach ($products as $prod)
              {{-- @dd( $prod->reviews[0]->user->username) --}}
              <div class="col-lg-5 mb-4" style="margin-right: 100px">
                <a href="/rating/detail/{{ $prod->id }}" class="text-decoration-none text-black">
                  <div class="scroll-area-rating d-flex">
                    <div class="foto-produk">
                      @if ($prod->form_image)
                        <img src="{{ asset('storage/'. $prod->form_image) }}" alt="" class="img-fluid img-thumbnail" style="min-width: 148px;max-width: 149px;min-height: 282px ;max-height: 283px ;overflow: hidden;">
                      @endif
                      {{-- <img src="{{ $prod->form_image }}" alt=""> --}}
                    </div>
                    <div class="isi ms-4">
                      <div class="nama-produk my-0">
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
                      @if ($prod->reviews->count())
                        <div class="person">
                          <div class="jarakwokwok">
                            <div class="foto-profile">
                              <img src="/img/section4_profile-picture.png" alt="">
                            </div>
                            <div class="nama-person ms-2">
                              {{ $prod->reviews[0]->user->username }}
                            </div>
                          </div>

                          <a class="lanjut" href="/rating/detail/{{ $prod->id }}">
                            (ALL REVIEWS)
                          </a>

                        </div>
                        <div class="rekomen" style="background-color: {{ ($prod->reviews[0]->recommend == 1) ? '#BDFFBC' : '#FFBCBC' }}">
                          <div class="jempol">
                            <img src="/img/{{ ($prod->reviews[0]->recommend == 1) ? 'section4_jempol-rekomen.png' : 'section4_jempol-nonrekomen.png'}}" alt="">
                          </div>
                          <div class="rekomendesc" style="color:  {{ ($prod->reviews[0]->recommend == 1) ? '#5EC75C' : '#C75C5C'}}">
                            &nbsp; {{ $prod->reviews[0]->user->username }} {{ ($prod->reviews[0]->recommend == 1) ? 'merekomendasikan ini' : 'tidak merekomendasikan ini'}}
                          </div>
                        </div>
                        <div reviews>
                          <p>
                            {{ $prod->reviews[0]->comment }}
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

    {{-- <script src="/js/rating"></script> --}}
    <script src="/js/rating.js"></script>
@endsection
