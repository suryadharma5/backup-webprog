@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="/css/ratingNreviewForm.css">
@endsection

@section('contents')
    <div class="full-width-content">
        <div class="content-atas row">
            <div class="back-button col-md-2">
                <i class="fa-solid fa-circle-arrow-left" style="color: #9FCAE6;"></i>
            </div>
            <div class="text-desc col-md-7">
                Yuk bantu Hamily dengan melengkapi list product yang kamu gunakan!
            </div>
            <div class="decoration col-md-3">
                ADD PRODUCTS
            </div>

        </div>

        {{-- Form add product --}}
        <form class="contentform" enctype="multipart/form-data" method="">
            <label for="namabrand">Nama Brand</label> <br>
            <input type="text" id="namabrand" name="namabrand" class="px-3 form-control"> <br>
            <label for="namaproduk">Nama Produk</label> <br>
            <input type="text" id="namaproduk" name="namaproduk" class="px-3 form-control"> <br>
            <label for="namavarian">Varian / Shade</label> <br>
            <input type="text" id="namavarian" name="namavarian" class="px-3 form-control"> <br>
            
            <div class="containers">
                <div class="wrapper">
                    <div class="image">
                       <img src="" alt="" id="uploadimage">
                    </div>
                    <div class="content">
                        <div class="icon">
                            <i class="fa-solid fa-image"></i>
                        </div>
                    </div>
                    <div id="cancel-btn">
                        <i class="fas fa-times"></i>
                    </div>
                    <div class="file-name">
                        File name here
                    </div>
                </div>
                <button onclick="defaultBtnActive()" id="custom-btn" type="button">+ ADD PHOTO</button>
                <input id="default-btn" type="file" hidden name="form-image">
            </div>
            <div class="sendbutton col-md-12">
                <button type="submit" class="btn btn-primary" onclick="sendvalue()">SEND</button>
                <a href="#">
                </a>
            </div>
        </form>

        <div class="sectionpic awanpink">
            <img src="/img/awanpink.png" alt="">
        </div>
        <div class="contentsimilar">
            <div class="title text-center">
                SIMILAR PRODUCT
            </div>
            <div class="contentscroll">
                <div class="scroll-container">
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
                                        &nbsp; NURHAYATI 1
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
                                    NURHAYATI 1 recommends this product!
                                </div>
                            </div>
                            <div class="reviews">
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
                                        &nbsp; NURHAYATI 2
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
                                    NURHAYATI 2 recommends this product!
                                </div>
                            </div>
                            <div class="reviews">
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
                            <div class="reviews">
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
                            <div class="reviews">
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
                                        &nbsp; NURHAYATI 5
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
                                    NURHAYATI 5 recommends this product!
                                </div>
                            </div>
                            <div class="reviews">
                                <p>
                                    sabun nya wangi banget, anakku jadi seneng kalo mandi xixixi
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @push('css-footer')
            <style>
                footer {
                    margin-top: -220px
                }
            </style>
    @endpush
    <script src="/js/addproduct.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
@endsection