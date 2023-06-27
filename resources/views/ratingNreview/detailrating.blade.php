@extends('layout.main')


@section('title')
    <title>Hamily | {{ $title }}</title>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/detailrating.css">
    <link rel="stylesheet" href="/css/ratingModal.css">
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
                    Johnson Baby
                </div>
                <div class="desc-product">
                    Baby Bath Blue 200ml
                </div>
                <div class="row mt-5 box-rate pb-5">
                    <div class="col-6 d-flex align-items-center justify-content-center flex-column pt-4">
                        <div class="rate">
                            4.9
                        </div>
                        <div class="star">
                            <img src="/img/star-detailrating.png" alt="">
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
                                    <div class="progress-bar" style="width: 90%"></div>
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
            <div class="modal-content" style="height: 450px;">
                {{-- <div class="modal-header border-0 margin-0">
                </div> --}}
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
                                    <input type="radio" name="rate" id="rate-5">
                                    <label for="rate-5" class="bi bi-star-fill"></label>
                                    <input type="radio" name="rate" id="rate-4">
                                    <label for="rate-4" class="bi bi-star-fill"></label>
                                    <input type="radio" name="rate" id="rate-3">
                                    <label for="rate-3" class="bi bi-star-fill"></label>
                                    <input type="radio" name="rate" id="rate-2">
                                    <label for="rate-2" class="bi bi-star-fill"></label>
                                    <input type="radio" name="rate" id="rate-1">
                                    <label for="rate-1" class="bi bi-star-fill"></label>
                                    <form action="#">
                                        <header></header>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="title-modal col-lg-3 mt-2">
                            <p class="modal-title " id="exampleModalLabel">REVIEW PRODUCT</p>
                        </div>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 150px"></textarea>
                        <label for="floatingTextarea" style="color: #F9C6D1">Let us know about your review</label>
                    </div>
                    <div class="term-rate mt-2 fw-bold">
                        review can be seen by many people
                        <img src="/img/info-rate.png" alt="" width="10px" height="10px" style="margin-left: 3px">
                    </div>

                    <div class="recommend-prods mt-4">
                        <span class="recommend-text">Would you like to recommend this product ? </span>
                        <span id="yes-recom" class="recom" onclick="changeColorYes()">
                            Yes
                            <input type="hidden" value="yes" id="tes">
                        </span>
                        <span id="|" class="recom"> | </span>
                        <span id="no-recom" class="recom" onclick="changeColorNo()">
                            No
                            <input type="hidden" value="no" id="tes">
                        </span>
                    </div>
                    <div class="col-lg-12 rateButton-wrap">
                        <button type="submit" class="btn btn-danger border-0 submit-rate" data-bs-toggle="modal" data-bs-target="#exampleModals">SEND</button>
                    </div>

                </div>
            </div>
            </div>
        </div>

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


                <div class="row box-komen-detailrating py-5">
                    <div class="col-1 text-center">
                        <img src="/img/section 3_profile-picture.png" alt="..." class="rounded-circle">
                    </div>
                    <div class="col-6">
                        <div style="font-weight: bold">NURHAYATI</div>
                        <img src="/img/star-detailrating.png" alt="">
                        <div class="recommend-detailrating py-1">
                            <img src="/img/section4_jempol-rekomen.png" alt="">
                            <div style="color: #5EC75C; margin-left:10px" class="">NURHAYATI recommends this product</div>
                        </div>
                        <div>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur semper facilisis mollis.
                            Nam vel rhoncus dolor, at accumsan est. Fusce varius dolor sit amet pulvinar vestibulum. Curabitur accumsan in purus vitae vulputate.
                            Pellentesque facilisis congue mauris, sed semper ex vehicula a. Maecenas in tempor massa, ac laoreet ante. Donec nec.
                        </div>
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
                        <div class="row mb-3">
                            <div class="col"></div>
                            <div class="col-4 text-center" style="">4 days ago</div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center" style=""><img src="/img/gb-artikel-tab.png" alt="" class="gb-komen-detailrating"></div>
                        </div>
                    </div>
                   
       
                </div>


                <div class="row box-komen-detailrating py-5 mt-5">
                    <div class="col-1 text-center">
                        <img src="/img/section 3_profile-picture.png" alt="..." class="rounded-circle">
                    </div>
                    <div class="col-6">
                        <div style="font-weight: bold">NURHAYATI</div>
                        <img src="/img/star-detailrating.png" alt="">
                        <div class="recommend-detailrating nonrekomen py-1">
                            <img src="/img/section4_jempol-nonrekomen.png" alt="">
                            <div style="color: #C75C5C; margin-left:10px" class="">NURHAYATI not recommends this product</div>
                        </div>
                        <div>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur semper facilisis mollis.
                            Nam vel rhoncus dolor, at accumsan est. Fusce varius dolor sit amet pulvinar vestibulum. Curabitur accumsan in purus vitae vulputate.
                            Pellentesque facilisis congue mauris, sed semper ex vehicula a. Maecenas in tempor massa, ac laoreet ante. Donec nec.
                        </div>
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
                        <div class="row mb-3">
                            <div class="col"></div>
                            <div class="col-4 text-center" style="">4 days ago</div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center" style=""><img src="/img/gb-artikel-tab.png" alt="" class="gb-komen-detailrating"></div>
                        </div>
                    </div>
                </div>
               
                <div class="row box-komen-detailrating py-5 mt-5">
                    <div class="row">
                        <div class="col-1 text-center">
                            <img src="/img/section 3_profile-picture.png" alt="..." class="rounded-circle">
                        </div>
                        <div class="col-6">
                            <div style="font-weight: bold">NURHAYATI</div>
                            <img src="/img/star-detailrating.png" alt="">
                            <div class="recommend-detailrating py-1">
                                <img src="/img/section4_jempol-rekomen.png" alt="">
                                <div style="color: #5EC75C; margin-left:10px" class="">NURHAYATI recommends this product</div>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="row mb-3">
                                <div class="col"></div>
                                <div class="col-4 text-center" style="">4 days ago</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-10">
                            <div>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur semper facilisis mollis.
                                Nam vel rhoncus dolor, at accumsan est. Fusce varius dolor sit amet pulvinar vestibulum. Curabitur accumsan in purus vitae vulputate.
                                Pellentesque facilisis congue mauris, sed semper ex vehicula a. Maecenas in tempor massa, ac laoreet ante. Donec nec.
                            </div>
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
                        <div class="col-1"></div>
                    </div>
       
                </div>
            </div>
        </div>
    </div>
   


@endsection




