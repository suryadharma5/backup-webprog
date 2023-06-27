@extends('layout.main')

@section('css')
    {{-- <link rel="stylesheet" href="/css/style.css"> --}}
    <link rel="stylesheet" href="/css/home1.css">
    {{-- <link rel="stylesheet" href="/css/navbar.css"> --}}
@endsection


@section('title')
 <title>Hamily | {{ $title }}</title>
@endsection 
@section('contents')
<div class="full-width-content">
    <div class="row">
        <div class="sectionpic awanatas">
            <img src="/img/awanputih.png" alt="">
        </div>
        <div class="sectionpic trackbutton zoom" style="">
            <a href="/home1/nextpage.html">
                <img src="/img/track button.png" alt="">
            </a>
        </div>
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="cropimg carousel-item active">
                <img src="/img/image1.jpg" class="d-block" alt="none">
              </div>
              <div class="cropimg carousel-item">
                <img src="/img/image2.jpg" class="d-block" alt="none" width="100%">
              </div>
              <div class="cropimg carousel-item">
                <img src="/img/image3.jpg" class="d-block" alt="none">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>

    <!-- ----------------------------------BOOK SECTION---------------------------------- -->
    <div class="row paddingcustom">
        <div class="container-fluid book">
            <div class="title text-center">
                Our Medical Partner
            </div>
            <div class="desc text-center">
                Find a doctor's schedule, book or make an appointment with an obstetrician.
            </div>
            <div class="booksteps">

                <div class="row">
                    <div class="col-2">
                        <div class="bookimg">
                            <img src="/img/book1.png" alt="">
                        </div>
                    </div>
                    <div class="col-1 d-flex align-items-center">
                        <div class="bookimg">
                            <img src="/img/arrow.png" alt="">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="bookimg">
                            <img src="/img/book2.png" alt="">
                        </div>
                    </div>
                    <div class="col-1 d-flex align-items-center">
                        <div class="bookimg">
                            <img src="/img/arrow.png" alt="">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="bookimg">
                            <img src="/img/book3.png" alt="">
                        </div>
                    </div>
                    <div class="col-1 d-flex align-items-center">
                        <div class="bookimg">
                            <img src="/img/arrow.png" alt="">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="bookimg">
                            <img src="/img/book4.png" alt="">
                        </div>
                    </div>
                </div>
                <!-- ---------------- -->
                <div class="row">
                    <div class="col-2">
                        <div class="bookdesc">
                            Choose Your Location and Hospital
                        </div>
                    </div>
                    <div class="col-1">
                        
                    </div>
                    <div class="col-2">
                        <div class="bookdesc">
                            Choose Your Obgyn
                        </div>
                    </div>
                    <div class="col-1">
                        
                    </div>
                    <div class="col-2">
                        <div class="bookdesc">
                            Choose Date
                        </div>
                    </div>
                    <div class="col-1">
                        
                    </div>
                    <div class="col-2">
                        <div class="bookdesc">
                            Make an Appointment
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-center zoom">
                <a href="./nextpage.html">
                    <button type="button" class="btn btn-primary">See More</button>
                </a>
            </div>
        </div>
    </div>

    <!-- ----------------------------------ARTICLE SECTION---------------------------------- -->
    <div class="sectionpic awanbiru">
        <img src="/img/awan.png" alt="">
    </div>
    <div class="row paddingcustom biru">
        <div class="container-fluid px-5 article">
            <div class="title text-center">
                Article
            </div>
            <div class="desc text-center">
                Get easy-to-read information on benefits or risk of medications, drugs, or other exposures during pregnancy and while breastfeeding.
            </div>
            <div class="row">
              <div class="col-md-4 px-3">
                <img src="/img/articlepic.jpg" alt="">
                <div class="articleTitle">
                    Ep. 54: Participating in a Pregnancy Study Part 2
                </div>
                <div class="articleDesc">
                    Leslie, a mom of two, joins host Chris Stallman to talk about her experience participating in a MotherToBaby pregnancy study. She describes the time commitment, benefits, study results and why..... 
                    <a href="nextpage.html">(continue)</a>
                </div>
                
              </div>
              <div class="col-md-4 px-3">
                <img src="/img/articlepic.jpg" alt="">
                <div class="articleTitle">
                    Ep. 54: Participating in a Pregnancy Study Part 2
                </div>
                <div class="articleDesc">
                    Leslie, a mom of two, joins host Chris Stallman to talk about her experience participating in a MotherToBaby pregnancy study. She describes the time commitment, benefits, study results and why..... 
                    <a href="nextpage.html">(continue)</a>
                </div>
              </div>
              <div class="col-md-4 px-3">
                <img src="/img/articlepic.jpg" alt="">
                <div class="articleTitle">
                    Ep. 54: Participating in a Pregnancy Study Part 2
                </div>
                <div class="articleDesc">
                    Leslie, a mom of two, joins host Chris Stallman to talk about her experience participating in a MotherToBaby pregnancy study. She describes the time commitment, benefits, study results and why..... 
                    <a href="nextpage.html">(continue)</a>
                </div>
              </div>
            </div>
            <div class="col-md-12 text-center zoom">
                <a href="./nextpage.html">
                    <button type="button" class="btn btn-primary">See More</button>
                </a>
            </div>
        </div>
    </div>

    <section>
        <div class="sectionpic awanbiru">
            <img src="/img/section3_awan.png" alt="">
        </div>
    </section>
    <section class="menfess">
        <div class="title text-center">
            Mention and Confess
        </div>
        <div class="desc text-center">
            Share your opinions based the issues and discuss with others
        </div>
        <div class="container-via">
            <div class="scroll-container">
                <div class="scroll-area">
                    <div class="persona">
                        <div class="foto-profile">
                            <img src="/img/section 3_profile-picture.png" alt="">
                        </div>
                        <div class="nama-profile">
                            <div class="nama">
                                Brian Setiawan 1
                            </div>
                            <div class="nama-desc">
                                Bapak-Bapak yang sudah bekerja
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="question">
                            <p>
                                Bagaimana Cara Mengubah Hari Senin Menjadi Hari Minggu ?
                            </p>
                        </div>
                        <img src="/img/section3_image-menfess.png" alt="">
                        <p>
                            Lorem ipsum dolor sit amet consectetur. Pharetra curabitur dolor lectus faucibus potenti nam commodo nec tincidunt. Gravida turpis morbi netus in. Adipiscing risus nulla vele...
                            <a href="#">(lanjut)</a>
                        </p>
                    </div>
                    <div class="action-bar">
                        <a href="#"><img src="/img/section3_like.png" alt=""></a>
                        <a href="#"><img src="/img/section3_comment.png" alt=""></a>
                        <a href="#"><img src="/img/section3_share.png" alt=""></a>
                    </div>
                </div>
                <div class="scroll-area">
                    <div class="persona">
                        <div class="foto-profile">
                            <img src="/img/section 3_profile-picture.png" alt="">
                        </div>
                        <div class="nama-profile">
                            <div class="nama">
                                Brian Setiawan 2
                            </div>
                            <div class="nama-desc">
                                Bapak-Bapak yang sudah bekerja
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="question">
                            <p>
                                Bagaimana Cara Mengubah Hari Senin Menjadi Hari Minggu ?
                            </p>
                        </div>
                        <img src="/img/section3_image-menfess.png" alt="">
                        <p>
                            Lorem ipsum dolor sit amet consectetur. Pharetra curabitur dolor lectus faucibus potenti nam commodo nec tincidunt. Gravida turpis morbi netus in. Adipiscing risus nulla vele...
                            <a href="#">(lanjut)</a>
                        </p>
                    </div>
                    <div class="action-bar">
                        <a href="#"><img src="/img/section3_like.png" alt=""></a>
                        <a href="#"><img src="/img/section3_comment.png" alt=""></a>
                        <a href="#"><img src="/img/section3_share.png" alt=""></a>
                    </div>
                </div>
                <div class="scroll-area">
                    <div class="persona">
                        <div class="foto-profile">
                            <img src="/img/section 3_profile-picture.png" alt="">
                        </div>
                        <div class="nama-profile">
                            <div class="nama">
                                Brian Setiawan 3
                            </div>
                            <div class="nama-desc">
                                Bapak-Bapak yang sudah bekerja
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="question">
                            <p>
                                Bagaimana Cara Mengubah Hari Senin Menjadi Hari Minggu ?
                            </p>
                        </div>
                        <img src="/img/section3_image-menfess.png" alt="">
                        <p>
                            Lorem ipsum dolor sit amet consectetur. Pharetra curabitur dolor lectus faucibus potenti nam commodo nec tincidunt. Gravida turpis morbi netus in. Adipiscing risus nulla vele...
                            <a href="#">(lanjut)</a>
                        </p>
                        <!-- <a class="lanjut" href="#">
                            <p>
                                (lanjut)
                            </p>
                        </a> -->
                    </div>
                    <div class="action-bar">
                        <a href="#"><img src="/img/section3_like.png" alt=""></a>
                        <a href="#"><img src="/img/section3_comment.png" alt=""></a>
                        <a href="#"><img src="/img/section3_share.png" alt=""></a>
                    </div>
                </div>
                <div class="scroll-area">
                    <div class="persona">
                        <div class="foto-profile">
                            <img src="/img/section 3_profile-picture.png" alt="">
                        </div>
                        <div class="nama-profile">
                            <div class="nama">
                                Brian Setiawan 4
                            </div>
                            <div class="nama-desc">
                                Bapak-Bapak yang sudah bekerja
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="question">
                            <p>
                                Bagaimana Cara Mengubah Hari Senin Menjadi Hari Minggu ?
                            </p>
                        </div>
                        <img src="/img/section3_image-menfess.png" alt="">
                        <p>
                            Lorem ipsum dolor sit amet consectetur. Pharetra curabitur dolor lectus faucibus potenti nam commodo nec tincidunt. Gravida turpis morbi netus in. Adipiscing risus nulla vele...
                            <a href="#">(lanjut)</a>
                        </p>
                    </div>
                    <div class="action-bar">
                        <a href="#"><img src="/img/section3_like.png" alt=""></a>
                        <a href="#"><img src="/img/section3_comment.png" alt=""></a>
                        <a href="#"><img src="/img/section3_share.png" alt=""></a>
                    </div>
                </div>
                <div class="scroll-area">
                    <div class="persona">
                        <div class="foto-profile">
                            <img src="/img/section 3_profile-picture.png" alt="">
                        </div>
                        <div class="nama-profile">
                            <div class="nama">
                                Brian Setiawan 1
                            </div>
                            <div class="nama-desc">
                                Bapak-Bapak yang sudah bekerja
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="question">
                            <p>
                                Bagaimana Cara Mengubah Hari Senin Menjadi Hari Minggu ?
                            </p>
                        </div>
                        <img src="/img/section3_image-menfess.png" alt="">
                        <p>
                            Lorem ipsum dolor sit amet consectetur. Pharetra curabitur dolor lectus faucibus potenti nam commodo nec tincidunt. Gravida turpis morbi netus in. Adipiscing risus nulla vele...
                            <a href="#">(lanjut)</a>
                        </p>
                    </div>
                    <div class="action-bar">
                        <a href="#"><img src="/img/section3_like.png" alt=""></a>
                        <a href="#"><img src="/img/section3_comment.png" alt=""></a>
                        <a href="#"><img src="/img/section3_share.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 text-center zoom">
                <a href="./nextpage.html">
                    <button type="button" class="btn btn-primary">See More</button>
                </a>
        </div>
    </section>

    <section>
        <div class="bekgron">
            <img src="/img/section4_gunung.png" alt="">
        </div>
    </section>
    <section class="rating-and-review">
        <div class="title text-center">
            Rating and Review
        </div>
        <div class="desc text-center">
            See and rate your choice of products
        </div>
        <div class="container-via">
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
                        <div reviews>
                            <p>
                                sabun nya wangi banget, anakku jadi seneng kalo mandi xixixi
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 text-center zoom">
            <div class="col-md-12 text-center zoom">
                <a href="./nextpage.html" class="text-decoration-none text-white">
                    <button type="button" class="btn btn-primary">See More</button>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col" style=" height:250px;background-color: #78A2CC;"></div>
        </div>

        @push('css-footer')
            <style>
                footer {
                    margin-top: -230px
                }
            </style>
        @endpush
        <!-- <div class="button">
            <a class="asu" href="#">
                <p>
                    SEE MORE
                </p>
            </a>
        </div> -->
    </section>
    
        
</div>
@endsection