@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="/css/ratingNreviewForm.css">
@endsection

@section('title')
    <title>Hamily | {{ $title }}</title>
@endsection

@section('contents')
    <div class="full-width-content">
        <div class="content-atas row align-items-center mt-4">
            <a class="back-button col-md-2" href="/rating">
                {{-- aa --}}
                <i class="fa-solid fa-circle-arrow-left" style="color: #9FCAE6;"></i>
            </a>
            <div class="text-desc col-md-7">
                Yuk bantu Hamily dengan melengkapi list product yang kamu gunakan!
            </div>
            <div class="col-md-2 align-self-center text-center text-white fw-bold py-2" style="background-color: #FFB8C7;border-radius: 7.918vw;">
                ADD PRODUCTS
            </div>
        </div>

        {{-- Form add product --}}
        <div class="container">
            <form class="contentform px-5 py-1" method="POST" action="/rating/product" enctype="multipart/form-data">
                @csrf
                <div class="product_name p-0">
                    <label for="name_product">Nama Produk</label> <br>
                    <input type="text" id="name_product" name="name_product" class="px-3 form-control @error('name_product') is-invalid @enderror"> <br>
                    @error('name_product')
                        <div class="invalid-feedback m-0 p-0">
                          {{ $message }}
                        </div>
                    @enderror
                </div>

                
                <label for="type_product">Tipe Produk</label> <br>
                <input type="text" id="type_product" name="type_product" class="px-3 form-control @error('type_product') is-invalid @enderror"> <br>
                @error('type_product')
                    <div class="invalid-feedback m-0 p-0">
                      {{ $message }}
                    </div>
                @enderror
                {{-- <label for="namavarian">Varian / Shade</label> <br>
                <input type="text" id="namavarian" name="namavarian" class="px-3 form-control"> <br> --}}
                
                <div class="containers @error('form_image') border border-danger @enderror">
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
                    <input id="default-btn" type="file" hidden name="form_image">
                </div>
                <div class="sendbutton col-md-12">
                    <button type="submit" class="btn btn-primary">SEND</button>
                    <a href="#">
                    </a>
                </div>
            </form>
            @error('form_image')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
            @enderror
        </div>

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