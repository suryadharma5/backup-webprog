@extends('layout.main')


@section('title')
    <title>Hamily | {{ $title }}</title>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/detailrating.css">
    <link rel="stylesheet" href="/css/ratingModal.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    
@endsection


@section('contents')
    @push('backgorund-color')
        <style>
            body{
                background-color: #78A2CC
            }
        </style>
    @endpush
<div style="background-color: #FFF7F6">
    <div class="container py-5" >
        <div class="row g-0">
            <div class="col-2">
                <a href="/rating">
                    <img src="/img/back-detailrating.png" alt="">
                </a>
            </div>
            <div class="col-4">
                <img src="/img/product-detailrating.png" alt="">
                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"> <span class="fw-bold"><i class="bi bi-plus-lg"></i> Add Review</span></button>
            </div>
            <div class="col pt-5">
                <div class="pt-5 title-product">
                    {{ $product->name_product }}
                </div>
                <div class="desc-product">
                    {{ $product->type_product }}
                </div>
                <div class="row mt-5 box-rate pb-5">
                    <div class="col-6 d-flex align-items-center justify-content-center flex-column pt-4">
                        <div class="rate">
                            {{ $product->rating }}
                        </div>
                        <div class="star">
                            <i class="bi bi-star-fill" style="color: {{ ($product->rating >= 1) ? '#78A2CC' : ''}}"></i>
                            <i class="bi bi-star-fill" style="color: {{ ($product->rating >= 2) ? '#78A2CC' : ''}}"></i>
                            <i class="bi bi-star-fill" style="color: {{ ($product->rating >= 3) ? '#78A2CC' : ''}}"></i>
                            <i class="bi bi-star-fill" style="color: {{ ($product->rating >= 4) ? '#78A2CC' : ''}}"></i>
                            <i class="bi bi-star-fill" style="color: {{ ($product->rating >= 5) ? '#78A2CC' : ''}}"></i>
                        </div>
                    </div>
                    <div class="col">
                        <div class="progress-title">
                            Rating Distribution
                        </div>
                        <div class="row">
                            <div class="col-9 mt-2">
                                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: 25%"></div>
                                </div>
                                <div class="progress mt-2" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: 100%"></div>
                                </div>
                                <div class="progress mt-2" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: 70%"></div>
                                </div>
                                <div class="progress mt-2" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: 40%"></div>
                                </div>
                                <div class="progress mt-2" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: 25%"></div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="rate-dist">
                                    5
                                </div>
                                <div class="rate-dist">
                                    4
                                </div>
                                <div class="rate-dist">
                                    3
                                </div>
                                <div class="rate-dist">
                                    2
                                </div>
                                <div class="rate-dist">
                                    1
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>


                <div class="row mt-5 box-rate pb-3">
                    <div class="col-3 d-flex justify-content-center">
                        <img src="/img/user-detailrating.png" alt="">
                    </div>
                    <div class="col-3 mt-3">
                        <div class="user-text">
                            25 <span class="user-text-span"> users </span>
                        </div>
                        <div class="reviewed-this">
                            Reviewed this
                        </div>
                    </div>
                    <div class="col-2">
                        <img src="/img/thumb-detailrating.png" alt="">
                    </div>
                    <div class="col-4 mt-3">
                        <div class="user-text">
                            25 <span class="user-text-span"> users </span>
                        </div>
                        <div class="reviewed-this">
                            Recommended this
                        </div>
                    </div>
                </div>


            </div>
        </div>

        {{-- Modal (Pop up review) --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="width: 700px; height: 500px;">
            <div class="modal-content" style="height: 500px;">
                {{-- <div class="modal-header border-0 margin-0">
                </div> --}}
                <form action="/rating/detail/review" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-1 mt-2" style="margin-left: 10px">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="color: #F9C6D1"></button>
                            </div>
    
                            <div class="col-lg-6 star-all">
                                <div class="star-wrapper col-lg-4">
                                    <div class="star-image">
                                        <img src="/img/star-perfect.png" alt="" width="70" height="70" id="star-perfect"> 
                                        <img src="/img/star-good.png" alt="" width="70" height="70" style="display: none;" id="star-good"> 
                                        <img src="/img/star-neutral.png" alt="" width="70" height="70" style="display: none" id="star-neutral"> 
                                        <img src="/img/star-bad.png" alt="" width="70" height="70" style="display: none" id="star-bad"> 
                                        <img src="/img/star-worst.png" alt="" width="70" height="70" style="display: none" id="star-worst"> 
                                    </div>
                                    <div class="star-text mt-2" id="star-text">
                                        Perfect
                                    </div>
                                </div>
    
                                <div class="star-container">
                                    <div class="star-rate col-lg-4" id="rates">
                                        <input type="radio" name="rate" id="rate-5" value="5">
                                        <label for="rate-5" class="bi bi-star-fill"></label>
                                        <input type="radio" name="rate" id="rate-4" value="4">
                                        <label for="rate-4" class="bi bi-star-fill"></label>
                                        <input type="radio" name="rate" id="rate-3" value="3">
                                        <label for="rate-3" class="bi bi-star-fill"></label>
                                        <input type="radio" name="rate" id="rate-2" value="2">
                                        <label for="rate-2" class="bi bi-star-fill"></label>
                                        <input type="radio" name="rate" id="rate-1" value="1" required>
                                        <label for="rate-1" class="bi bi-star-fill"></label>
                                        @error('rate')
                                            <div class="invalid-feedback">
                                              {{ $message }}
                                            </div>
                                            <script>
                                                
                                                $('#exampleModal').modal('show');
                                            </script>
                                        @enderror
                                    </div>
                                </div>
                            </div>
    
                            <div class="title-modal col-lg-3 mt-2">
                                <p class="modal-title " id="exampleModalLabel">REVIEW PRODUCT</p>
                            </div>
                        </div>
    
                        <div class="form-floating">
                            <textarea class="form-control @error('comment') is-invalid @enderror" placeholder="Leave a comment here" id="floatingTextarea" style="height: 150px" name="comment" required></textarea>
                            <label for="floatingTextarea" style="color: #F9C6D1">Let us know about your review</label>

                            @error('comment')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                <script type="text/javascript">
                                    console.log('error');
                                    $(document).ready(function(){
                                        //your stuff
                                        $('#exampleModal').modal('show');
                                    });
                                </script>
                            @enderror
                        </div>
    
                        <div class="term-rate mt-2 fw-bold d-flex flex-row">
                            <div class="caution col-lg-5">
                                review can be seen by many people
                                <img src="/img/info-rate.png" alt="" width="10px" height="10px" style="margin-left: 3px">
                            </div>
    
                            <div class="image-input d-flex flex-row justify-content-end col-lg mx-2">
                                <p class="text-center mx-2 mt-2 filename">No file chosen</p>
                                <button type="button" id="photoButton" onclick="buttonClick()" class="border-0 bg-transparent" style="text-align: left; width:7%">
                                    <i class="bi bi-image-fill fa-2x" style="color: #FFA5B8"></i>
                                </button>
                                <input type="file" name="reply-photo" id="reply-photo" hidden>
                                <i class="bi bi-x-lg" id="x-button" style="display: none;" onclick="removeFile()"></i>
                            </div>
                        </div>
    
                        <div class="recommend-prods">
                            <div class="col-md-6">
                                <label for="validationCustom04" class="form-label" >Recommend this product ?</label>
                                <div class="col-md-6">
                                    <select class="form-select" id="validationCustom04" name="recommend" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a valid state.
                                    </div>
                                </div>
                              </div>
                        </div>

                        <input type="hidden" name="product_id" value="{{ $product->id }}">
    
                        <div class="col-lg-12 rateButton-wrap">
                            {{-- <button type="submit" class="btn btn-danger border-0 submit-rate" data-bs-toggle="modal" data-bs-target="#exampleModals">SEND</button> --}}
                            <button type="submit" class="btn btn-danger border-0 submit-rate" @error('comment') data-bs-target="#exampleModal" @enderror>SEND</button>
                        </div>
    
                    </div>
                </form>
            </div>
            </div>
        </div>
        {{-- Modal End --}}

        <div class="modal fade" id="exampleModals" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="margin-left : 500px">
              <div class="modal-content" style="height : 500px; border-radius : 10px; width:600px; background-color: #D9D9D9">
                <div class="modal-body">
                  <div class="rate-notif">
                    <div class="bungkus">
                        <img src="/img/success-rate.png" alt="" width="400" height="250">
                    </div>
                    <span class="success-msg">Your review has been successfully added</span>
                    <div class="rateButton-wrap">
                      <button type="submit" class="btn btn-danger border-0 submit-rate" style="border-radius : 20px; color : #FFFF;" data-bs-dismiss="modal">Back</button>
                    </div>
                  </div>


                </div>
              </div>
            </div>
        </div>
    </div>
</div>
   
    <div class="sectionpic awanbiru">
        <img src="/img/awan-detailrating.png" alt="" style="width: 100%">
    </div>


    <div class="container-fluid biru-bawah pt-5 pb-5" style="margin-top: -120px">
        <div class="container pt-5">
            <div class="container">
                <div class="row pt-3 mt-4">
                    <div class="col-3"></div>
                    <div class="col-6 d-flex justify-content-center fs-2 border-bottom border-3 mb-5" style="font-weight: bold; color:#FFF7F6">USER REVIEWS</div>
                    <div class="col-3"></div>
                </div>


                @foreach ($review as $rev)
                    <div class="row box-komen-detailrating py-5 mb-3">
                        <div class="col-1 text-center">
                            <img src="/img/section 3_profile-picture.png" alt="..." class="rounded-circle">
                        </div>
                        <div class="col-6">
                            {{-- @dd($rev->user) --}}
                            <div style="font-weight: bold">{{ $rev->user->username }} (4 days ago)</div>
                            <div class="becice">
                                <i class="bi bi-star-fill" style="color: {{ ($rev->rate >= 1) ? '#78A2CC' : ''}}"></i>
                                <i class="bi bi-star-fill" style="color: {{ ($rev->rate >= 2) ? '#78A2CC' : ''}}"></i>
                                <i class="bi bi-star-fill" style="color: {{ ($rev->rate >= 3) ? '#78A2CC' : ''}}"></i>
                                <i class="bi bi-star-fill" style="color: {{ ($rev->rate >= 4) ? '#78A2CC' : ''}}"></i>
                                <i class="bi bi-star-fill" style="color: {{ ($rev->rate >= 5) ? '#78A2CC' : ''}}"></i>
                            </div>
                            <div class="recommend-detailrating py-1 mt-2" style="background-color: {{ ($rev->recommend == 1) ? '#BDFFBC' : '#FFBCBC' }}">
                                <img src="{{ ($rev->recommend == 1) ? '/img/section4_jempol-rekomen.png' : '/img/section4_jempol-nonrekomen.png'}}" alt="">
                                <div style="color: {{ ($rev->recommend == 1) ? '#5EC75C' : '#C75C5C'}}; margin-left:10px" class="">{{ $rev->user->username }} {{ ($rev->recommend == 1) ? 'recommends' : 'not recommends' }} this product</div>
                            </div>
                            <p class="mt-2">
                                {{ $rev->comment }}
                            </p>
                            <div style="font-weight: bold" class="mt-3">
                                Do you find this review helpful?<span>
                                    <a href="" style="text-decoration: none;color: #FFB8C7" class="yesno-detailrating">Yes</a>
                                    |
                                    <a href="" style="text-decoration: none;color: #FFB8C7" class="yesno-detailrating">No</a>
                                </span>
                            </div>
                            <div>
                                3 people have found this review helpful
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="row mb-3 d-flex justify-content-end">
                                {{-- <div class="col"></div> --}}
                                <div class="col-4 text-center" style="">
                                    {{-- 4 days ago --}}
                                    <div class="dropdown-center">
                                        <i class="bi bi-three-dots-vertical titik-tiga" data-bs-toggle="dropdown" style=""></i>
                                        <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#"><i class="bi bi-exclamation-circle me-2"></i>Laporkan</a></li>
                                          @if ($rev->user_id == auth()->user()->id)
                                          <li><hr class="dropdown-divider"></li>
                                            <form action="/rating/detail/review/{{ $rev->id}}" method="POST">
                                                <li onclick="return confirm('Apakah anda yakin ?')">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Hapus</button> 
                                                </li>
                                            </form>
                                          @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 text-center" style=""><img src="/img/gb-artikel-tab.png" alt="" class="gb-komen-detailrating"></div>
                            </div>
                        </div>
                    
                    
                    </div>
                @endforeach

            </div>
        </div>
    </div>
   


@endsection




