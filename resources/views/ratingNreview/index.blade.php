@extends('layout.main')

@section('title')
    <title>Hamily | {{ $title }}</title>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/home1.css">
@endsection

@section('contents')
    <div class="container">
        <div class="search-bar d-flex flex-row mt-4">
            <div class="col-lg-5 d-flex flex-row py-2">
                {{-- <input class="col-lg-8 border-0" type="text" placeholder="Search Product">
                <i class="bi bi-search fa-1x col-lg-4" style="color: #78A2CC; -webkit-text-stroke: 2px;"></i> --}}
                <div class="input-group col-lg" style="border-color:#FFB8C7; border-style: solid; text-align: right ; border-radius: 7px">
                    <input type="text" class="form-control" placeholder="Search Product" name="search" >
                    <button class="btn border-0 bg-transparent" type="submit" id="button-addon2"><i class="bi bi-search fa-1x col-lg-4" style="color: #78A2CC; -webkit-text-stroke: 1px;"></i></button>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5 py-2 px-2">
                <div class="d-flex justify-content-center py-2" style="background-color: #FFB8C7; border-radius: 10px">
                    <a href="/rating/form" class="text-decoration-none text-white fw-bold"><h5 class="fw-bold">Add Product</h5></a>
                </div>
            </div>
        </div>
        <h3 class="mt-4 fw-bold"> Popular Products</h3>
        <div class="mt-4 bg row-col-6 d-flex" style="">
            <div class="row row-cols-2 row-cols-md-2 g-4">
                    <div class="scroll-area-rating" style="display: flex">
                        <div class="foto-produk">
                            <img src="/img/section4_photo-product.png" alt="">
                        </div>
                        <div class="isi">
                            <div class="nama-produk">
                                <!-- <h5> -->
                                    Johnsons Baby
                                <!-- </h5> -->
                                <div class="jenis-produk">
                                    Baby Bath Blue 200ml
                                </div>
                            </div>
                            <div class="count">
                                <div class="rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="average-rating">
                                    <!-- <p> -->
                                        &nbsp; 4.9 &nbsp;
                                    <!-- </p> -->
                                </div>
                                <div class="total-rating">
                                    <!-- <p> -->
                                        (250 people)
                                    <!-- </p> -->
                                </div>
                            </div>
                            <hr>
                            <div class="person">
                                <div class="jarakwokwok">
                                    <div class="foto-profile">
                                        <img src="/img/section4_profile-picture.png" alt="">
                                    </div>
                                    <div class="nama-person">
                                        &nbsp; NURHAYATI 1
                                    </div>
                                </div>
                                <a class="lanjut" href="/rating/detail">
                                    <!-- <p> -->
                                    (ALL REVIEWS)
                                    <!-- </p> -->
                                </a>
                            </div>
                            <div class="rekomen">
                                <div class="jempol">
                                    <img src="/img/section4_jempol-rekomen.png" alt="">
                                </div>
                                <div class="rekomendesc">
                                    &nbsp;
                                    NURHAYATI 1 recommends this product!
                                </div>
                            </div>
                            <div reviews>
                                <p>
                                    sabun nya wangi banget, anakku jadi seneng kalo mandi xixixi
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="scroll-area-rating" style="display: flex">
                        <div class="foto-produk">
                            <img src="/img/section4_photo-product.png" alt="">
                        </div>
                        <div class="isi">
                            <div class="nama-produk">
                                <!-- <h5> -->
                                    Johnsons Baby
                                <!-- </h5> -->
                                <div class="jenis-produk">
                                    Baby Bath Blue 200ml
                                </div>
                            </div>
                            <div class="count">
                                <div class="rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="average-rating">
                                    <!-- <p> -->
                                        &nbsp; 4.9 &nbsp;
                                    <!-- </p> -->
                                </div>
                                <div class="total-rating">
                                    <!-- <p> -->
                                        (250 people)
                                    <!-- </p> -->
                                </div>
                            </div>
                            <hr>
                            <div class="person">
                                <div class="jarakwokwok">
                                    <div class="foto-profile">
                                        <img src="/img/section4_profile-picture.png" alt="">
                                    </div>
                                    <div class="nama-person">
                                        &nbsp; NURHAYATI 1
                                    </div>
                                </div>
                                <a class="lanjut" href="/deta">
                                    <!-- <p> -->
                                    (ALL REVIEWS)
                                    <!-- </p> -->
                                </a>
                            </div>
                            <div class="rekomen">
                                <div class="jempol">
                                    <img src="/img/section4_jempol-rekomen.png" alt="">
                                </div>
                                <div class="rekomendesc">
                                    &nbsp;
                                    NURHAYATI 1 recommends this product!
                                </div>
                            </div>
                            <div reviews>
                                <p>
                                    sabun nya wangi banget, anakku jadi seneng kalo mandi xixixi
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="scroll-area-rating" style="display: flex">
                        <div class="foto-produk">
                            <img src="/img/section4_photo-product.png" alt="">
                        </div>
                        <div class="isi">
                            <div class="nama-produk">
                                <!-- <h5> -->
                                    Johnsons Baby
                                <!-- </h5> -->
                                <div class="jenis-produk">
                                    Baby Bath Blue 200ml
                                </div>
                            </div>
                            <div class="count">
                                <div class="rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="average-rating">
                                    <!-- <p> -->
                                        &nbsp; 4.9 &nbsp;
                                    <!-- </p> -->
                                </div>
                                <div class="total-rating">
                                    <!-- <p> -->
                                        (250 people)
                                    <!-- </p> -->
                                </div>
                            </div>
                            <hr>
                            <div class="person">
                                <div class="jarakwokwok">
                                    <div class="foto-profile">
                                        <img src="/img/section4_profile-picture.png" alt="">
                                    </div>
                                    <div class="nama-person">
                                        &nbsp; NURHAYATI 1
                                    </div>
                                </div>
                                <a class="lanjut" href="/deta">
                                    <!-- <p> -->
                                    (ALL REVIEWS)
                                    <!-- </p> -->
                                </a>
                            </div>
                            <div class="rekomen">
                                <div class="jempol">
                                    <img src="/img/section4_jempol-rekomen.png" alt="">
                                </div>
                                <div class="rekomendesc">
                                    &nbsp;
                                    NURHAYATI 1 recommends this product!
                                </div>
                            </div>
                            <div reviews>
                                <p>
                                    sabun nya wangi banget, anakku jadi seneng kalo mandi xixixi
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="scroll-area-rating" style="display: flex">
                        <div class="foto-produk">
                            <img src="/img/section4_photo-product.png" alt="">
                        </div>
                        <div class="isi">
                            <div class="nama-produk">
                                <!-- <h5> -->
                                    Johnsons Baby
                                <!-- </h5> -->
                                <div class="jenis-produk">
                                    Baby Bath Blue 200ml
                                </div>
                            </div>
                            <div class="count">
                                <div class="rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="average-rating">
                                    <!-- <p> -->
                                        &nbsp; 4.9 &nbsp;
                                    <!-- </p> -->
                                </div>
                                <div class="total-rating">
                                    <!-- <p> -->
                                        (250 people)
                                    <!-- </p> -->
                                </div>
                            </div>
                            <hr>
                            <div class="person">
                                <div class="jarakwokwok">
                                    <div class="foto-profile">
                                        <img src="/img/section4_profile-picture.png" alt="">
                                    </div>
                                    <div class="nama-person">
                                        &nbsp; NURHAYATI 1
                                    </div>
                                </div>
                                <a class="lanjut" href="/deta">
                                    <!-- <p> -->
                                    (ALL REVIEWS)
                                    <!-- </p> -->
                                </a>
                            </div>
                            <div class="rekomen">
                                <div class="jempol">
                                    <img src="/img/section4_jempol-rekomen.png" alt="">
                                </div>
                                <div class="rekomendesc">
                                    &nbsp;
                                    NURHAYATI 1 recommends this product!
                                </div>
                            </div>
                            <div reviews>
                                <p>
                                    sabun nya wangi banget, anakku jadi seneng kalo mandi xixixi
                                </p>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="row row-cols-2 row-cols-md-2 g-4">
                    <div class="scroll-area-rating" style="display: flex">
                        <div class="foto-produk">
                            <img src="/img/section4_photo-product.png" alt="">
                        </div>
                        <div class="isi">
                            <div class="nama-produk">
                                <!-- <h5> -->
                                    Johnsons Baby
                                <!-- </h5> -->
                                <div class="jenis-produk">
                                    Baby Bath Blue 200ml
                                </div>
                            </div>
                            <div class="count">
                                <div class="rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="average-rating">
                                    <!-- <p> -->
                                        &nbsp; 4.9 &nbsp;
                                    <!-- </p> -->
                                </div>
                                <div class="total-rating">
                                    <!-- <p> -->
                                        (250 people)
                                    <!-- </p> -->
                                </div>
                            </div>
                            <hr>
                            <div class="person">
                                <div class="jarakwokwok">
                                    <div class="foto-profile">
                                        <img src="/img/section4_profile-picture.png" alt="">
                                    </div>
                                    <div class="nama-person">
                                        &nbsp; NURHAYATI 1
                                    </div>
                                </div>
                                <a class="lanjut" href="/deta">
                                    <!-- <p> -->
                                    (ALL REVIEWS)
                                    <!-- </p> -->
                                </a>
                            </div>
                            <div class="rekomen">
                                <div class="jempol">
                                    <img src="/img/section4_jempol-rekomen.png" alt="">
                                </div>
                                <div class="rekomendesc">
                                    &nbsp;
                                    NURHAYATI 1 recommends this product!
                                </div>
                            </div>
                            <div reviews>
                                <p>
                                    sabun nya wangi banget, anakku jadi seneng kalo mandi xixixi
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="scroll-area-rating" style="display: flex">
                        <div class="foto-produk">
                            <img src="/img/section4_photo-product.png" alt="">
                        </div>
                        <div class="isi">
                            <div class="nama-produk">
                                <!-- <h5> -->
                                    Johnsons Baby
                                <!-- </h5> -->
                                <div class="jenis-produk">
                                    Baby Bath Blue 200ml
                                </div>
                            </div>
                            <div class="count">
                                <div class="rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="average-rating">
                                    <!-- <p> -->
                                        &nbsp; 4.9 &nbsp;
                                    <!-- </p> -->
                                </div>
                                <div class="total-rating">
                                    <!-- <p> -->
                                        (250 people)
                                    <!-- </p> -->
                                </div>
                            </div>
                            <hr>
                            <div class="person">
                                <div class="jarakwokwok">
                                    <div class="foto-profile">
                                        <img src="/img/section4_profile-picture.png" alt="">
                                    </div>
                                    <div class="nama-person">
                                        &nbsp; NURHAYATI 1
                                    </div>
                                </div>
                                <a class="lanjut" href="/deta">
                                    <!-- <p> -->
                                    (ALL REVIEWS)
                                    <!-- </p> -->
                                </a>
                            </div>
                            <div class="rekomen">
                                <div class="jempol">
                                    <img src="/img/section4_jempol-rekomen.png" alt="">
                                </div>
                                <div class="rekomendesc">
                                    &nbsp;
                                    NURHAYATI 1 recommends this product!
                                </div>
                            </div>
                            <div reviews>
                                <p>
                                    sabun nya wangi banget, anakku jadi seneng kalo mandi xixixi
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="scroll-area-rating" style="display: flex">
                        <div class="foto-produk">
                            <img src="/img/section4_photo-product.png" alt="">
                        </div>
                        <div class="isi">
                            <div class="nama-produk">
                                <!-- <h5> -->
                                    Johnsons Baby
                                <!-- </h5> -->
                                <div class="jenis-produk">
                                    Baby Bath Blue 200ml
                                </div>
                            </div>
                            <div class="count">
                                <div class="rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="average-rating">
                                    <!-- <p> -->
                                        &nbsp; 4.9 &nbsp;
                                    <!-- </p> -->
                                </div>
                                <div class="total-rating">
                                    <!-- <p> -->
                                        (250 people)
                                    <!-- </p> -->
                                </div>
                            </div>
                            <hr>
                            <div class="person">
                                <div class="jarakwokwok">
                                    <div class="foto-profile">
                                        <img src="/img/section4_profile-picture.png" alt="">
                                    </div>
                                    <div class="nama-person">
                                        &nbsp; NURHAYATI 1
                                    </div>
                                </div>
                                <a class="lanjut" href="/deta">
                                    <!-- <p> -->
                                    (ALL REVIEWS)
                                    <!-- </p> -->
                                </a>
                            </div>
                            <div class="rekomen">
                                <div class="jempol">
                                    <img src="/img/section4_jempol-rekomen.png" alt="">
                                </div>
                                <div class="rekomendesc">
                                    &nbsp;
                                    NURHAYATI 1 recommends this product!
                                </div>
                            </div>
                            <div reviews>
                                <p>
                                    sabun nya wangi banget, anakku jadi seneng kalo mandi xixixi
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="scroll-area-rating" style="display: flex">
                        <div class="foto-produk">
                            <img src="/img/section4_photo-product.png" alt="">
                        </div>
                        <div class="isi">
                            <div class="nama-produk">
                                <!-- <h5> -->
                                    Johnsons Baby
                                <!-- </h5> -->
                                <div class="jenis-produk">
                                    Baby Bath Blue 200ml
                                </div>
                            </div>
                            <div class="count">
                                <div class="rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="average-rating">
                                    <!-- <p> -->
                                        &nbsp; 4.9 &nbsp;
                                    <!-- </p> -->
                                </div>
                                <div class="total-rating">
                                    <!-- <p> -->
                                        (250 people)
                                    <!-- </p> -->
                                </div>
                            </div>
                            <hr>
                            <div class="person">
                                <div class="jarakwokwok">
                                    <div class="foto-profile">
                                        <img src="/img/section4_profile-picture.png" alt="">
                                    </div>
                                    <div class="nama-person">
                                        &nbsp; NURHAYATI 1
                                    </div>
                                </div>
                                <a class="lanjut" href="/deta">
                                    <!-- <p> -->
                                    (ALL REVIEWS)
                                    <!-- </p> -->
                                </a>
                            </div>
                            <div class="rekomen">
                                <div class="jempol">
                                    <img src="/img/section4_jempol-rekomen.png" alt="">
                                </div>
                                <div class="rekomendesc">
                                    &nbsp;
                                    NURHAYATI 1 recommends this product!
                                </div>
                            </div>
                            <div reviews>
                                <p>
                                    sabun nya wangi banget, anakku jadi seneng kalo mandi xixixi
                                </p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
