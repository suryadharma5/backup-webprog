@extends('layout.main')

@section('title')
    <title>Hamily | {{ $title }}</title>
@endsection

@section('css')
        <link rel="stylesheet" href="./popular.css">
@endsection

<link rel="stylesheet" href="/popular.css">

@section('contents')
    <div class="container mt-4 bg row-cols-">
        <div class="row row-cols-2 row-cols-md-2 g-4">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/section4_photo-product.png" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Johnsons Baby</h5>
                            <div class="jenis-produk">
                                Baby Bath Blue 200ml
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
                                        &nbsp; NURHAYATI 3
                                    </div>
                                </div>
                                <a class="lanjut" href="#">
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
                                    NURHAYATI 3 recommends this product!
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
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="/img/section4_photo-product.png" alt="">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Johnsons Baby</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 540px; mx: 100px">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="/img/section4_photo-product.png" alt="">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Johnsons Baby</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 540px; mx: 100px">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="/img/section4_photo-product.png" alt="">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Johnsons Baby</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="popular-products">
        <div class="scroll-area">
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
                                        &nbsp; NURHAYATI 3
                                    </div>
                                </div>
                                <a class="lanjut" href="#">
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
                                    NURHAYATI 3 recommends this product!
                                </div>
                            </div>
                            <div reviews>
                                <p>
                                    sabun nya wangi banget, anakku jadi seneng kalo mandi xixixi
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="scroll-area">
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
                                        &nbsp; NURHAYATI 4
                                    </div>
                                </div>
                                <a class="lanjut" href="#">
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
                                    NURHAYATI 4 recommends this product!
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
@endsection
