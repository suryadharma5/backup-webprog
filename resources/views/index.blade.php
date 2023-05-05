@extends('layout.main')
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
            <a href="./nextpage.html">
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
        <!-- <div class="bekgron">
            <img src="/img/section3_awan.png" alt="">
        </div> -->
    </section>
    <section class="menfess">
        <div class="title text-center">
            Mention and Confess
        </div>
        <div class="desc text-center">
            Share your opinions based the issues and discuss with others
        </div>
        <!-- <div class="title">
            <h2 class="judul">
                Mention and Confess
            </h2>
            <p class="dekripsi">
                share your opinions based the issues and discuss with others           
            </p>
        </div> -->
        <div class="container-via">
            <div class="scroll-container">
                <div class="scroll-area">
                    <div class="person">
                        <div class="foto-profile">
                            <img src="/img/section 3_profile-picture.png" alt="">
                        </div>
                        <div class="nama-profile">
                            <h5>
                                Brian Setiawan 1
                            </h5>
                            <p>
                                Bapak-Bapak yang sudah bekerja
                            </p>
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
                        <ul class="triple-buttons">
                            <li class="like">
                                <a href="#">
                                    <img src="/img/section3_like.png" alt="">
                                </a>
                            </li>
                            <li class="comment">
                                <a href="#">
                                    <img src="/img/section3_comment.png" alt="">
                                </a>
                            </li>
                            <li class="share">
                                <a href="#">
                                    <img src="/img/section3_share.png" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="scroll-area">
                    <div class="person">
                        <div class="foto-profile">
                            <img src="/img/section 3_profile-picture.png" alt="">
                        </div>
                        <div class="nama-profile">
                            <h5>
                                Brian Setiawan 2
                            </h5>
                            <p>
                                Bapak-Bapak yang sudah bekerja
                            </p>
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
                        <ul class="triple-buttons">
                            <li class="like">
                                <a href="#">
                                    <img src="/img/section3_like.png" alt="">
                                </a>
                            </li>
                            <li class="comment">
                                <a href="#">
                                    <img src="/img/section3_comment.png" alt="">
                                </a>
                            </li>
                            <li class="share">
                                <a href="#">
                                    <img src="/img/section3_share.png" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="scroll-area">
                    <div class="person">
                        <div class="foto-profile">
                            <img src="/img/section 3_profile-picture.png" alt="">
                        </div>
                        <div class="nama-profile">
                            <h5>
                                Brian Setiawan 3
                            </h5>
                            <p>
                                Bapak-Bapak yang sudah bekerja
                            </p>
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
                        <ul class="triple-buttons">
                            <li class="like">
                                <a href="#">
                                    <img src="/img/section3_like.png" alt="">
                                </a>
                            </li>
                            <li class="comment">
                                <a href="#">
                                    <img src="/img/section3_comment.png" alt="">
                                </a>
                            </li>
                            <li class="share">
                                <a href="#">
                                    <img src="/img/section3_share.png" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="scroll-area">
                    <div class="person">
                        <div class="foto-profile">
                            <img src="/img/section 3_profile-picture.png" alt="">
                        </div>
                        <div class="nama-profile">
                            <h5>
                                Brian Setiawan 4
                            </h5>
                            <p>
                                Bapak-Bapak yang sudah bekerja
                            </p>
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
                        <ul class="triple-buttons">
                            <li class="like">
                                <a href="#">
                                    <img src="/img/section3_like.png" alt="">
                                </a>
                            </li>
                            <li class="comment">
                                <a href="#">
                                    <img src="/img/section3_comment.png" alt="">
                                </a>
                            </li>
                            <li class="share">
                                <a href="#">
                                    <img src="/img/section3_share.png" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="scroll-area">
                    <div class="person">
                        <div class="foto-profile">
                            <img src="/img/section 3_profile-picture.png" alt="">
                        </div>
                        <div class="nama-profile">
                            <h5>
                                Brian Setiawan 5
                            </h5>
                            <p>
                                Bapak-Bapak yang sudah bekerja
                            </p>
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
                        <ul class="triple-buttons">
                            <li class="like">
                                <a href="#">
                                    <img src="/img/section3_like.png" alt="">
                                </a>
                            </li>
                            <li class="comment">
                                <a href="#">
                                    <img src="/img/section3_comment.png" alt="">
                                </a>
                            </li>
                            <li class="share">
                                <a href="#">
                                    <img src="/img/section3_share.png" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 text-center zoom">
                <a href="./nextpage.html">
                    <button type="button" class="btn btn-primary">See More</button>
                </a>
        </div>
        <!-- <div class="button">
            <a class="asu" href="#">
                <p>
                    SEE MORE
                </p>
            </a>
        </div> -->
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
        <div class="scroll-container">
            <div class="scroll-area">
                <div class="foto-produk">
                    <img src="/img/section4_photo-product.png" alt="">
                </div>
                <div class="isi">
                    <div class="nama-produk">
                        Johnsons Baby
                    </div>
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
                            <p>
                                &nbsp; 4.9 &nbsp;
                            </p>
                        </div>
                        <div class="total-rating">
                            <p>
                                (250 people)
                            </p>
                        </div>
                    </div>
                    <div class="person">
                        <div class="foto-profile">
                            <img src="/img/section4_profile-picture.png" alt="">
                        </div>
                        <div class="nama-profile">
                                NURHAYATI 1
                        </div>
                        <a href="#">ALL REVIEWS</a>
                    </div>
                    <div class="rekomen">
                        <div class="jempol">
                            <img src="/img/section4_jempol-rekomen.png" alt="">
                        </div>
                        <div class="username">
                            &nbsp;
                            NURHAYATI 1
                        </div>
                        <div class="ratingdesc">
                            recommends this product!
                        </div>
                    </div>
                    <div reviews>
                        sabun nya wangi banget, anakku jadi seneng kalo mandi xixixi
                    </div>
                </div>
            </div>

            <div class="scroll-area">
                <div class="foto-produk">
                    <img src="/img/section4_photo-product.png" alt="">
                </div>
                <div class="isi">
                    <div class="nama-produk">
                        Johnsons Baby
                    </div>
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
                            <p>
                                &nbsp; 4.9 &nbsp;
                            </p>
                        </div>
                        <div class="total-rating">
                            <p>
                                (250 people)
                            </p>
                        </div>
                    </div>
                    <div class="person">
                        <div class="foto-profile">
                            <img src="/img/section4_profile-picture.png" alt="">
                        </div>
                        <div class="nama-profile">
                                NURHAYATI 1
                        </div>
                        <a href="#">ALL REVIEWS</a>
                    </div>
                    <div class="rekomen">
                        <div class="jempol">
                            <img src="/img/section4_jempol-rekomen.png" alt="">
                        </div>
                        <div class="username">
                            &nbsp;
                            NURHAYATI 1
                        </div>
                        <div class="ratingdesc">
                            recommends this product!
                        </div>
                    </div>
                    <div reviews>
                        sabun nya wangi banget, anakku jadi seneng kalo mandi xixixi
                    </div>
                </div>
            </div>

            <div class="scroll-area">
                <div class="foto-produk">
                    <img src="/img/section4_photo-product.png" alt="">
                </div>
                <div class="isi">
                    <div class="nama-produk">
                        Johnsons Baby
                    </div>
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
                            <p>
                                &nbsp; 4.9 &nbsp;
                            </p>
                        </div>
                        <div class="total-rating">
                            <p>
                                (250 people)
                            </p>
                        </div>
                    </div>
                    <div class="person">
                        <div class="foto-profile">
                            <img src="/img/section4_profile-picture.png" alt="">
                        </div>
                        <div class="nama-profile">
                                NURHAYATI 1
                        </div>
                        <a href="#">ALL REVIEWS</a>
                    </div>
                    <div class="rekomen">
                        <div class="jempol">
                            <img src="/img/section4_jempol-rekomen.png" alt="">
                        </div>
                        <div class="username">
                            &nbsp;
                            NURHAYATI 1
                        </div>
                        <div class="ratingdesc">
                            recommends this product!
                        </div>
                    </div>
                    <div reviews>
                        sabun nya wangi banget, anakku jadi seneng kalo mandi xixixi
                    </div>
                </div>
            </div>

            <div class="scroll-area">
                <div class="foto-produk">
                    <img src="/img/section4_photo-product.png" alt="">
                </div>
                <div class="isi">
                    <div class="nama-produk">
                        Johnsons Baby
                    </div>
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
                            <p>
                                &nbsp; 4.9 &nbsp;
                            </p>
                        </div>
                        <div class="total-rating">
                            <p>
                                (250 people)
                            </p>
                        </div>
                    </div>
                    <div class="person">
                        <div class="foto-profile">
                            <img src="/img/section4_profile-picture.png" alt="">
                        </div>
                        <div class="nama-profile">
                                NURHAYATI 1
                        </div>
                        <a href="#">ALL REVIEWS</a>
                    </div>
                    <div class="rekomen">
                        <div class="jempol">
                            <img src="/img/section4_jempol-rekomen.png" alt="">
                        </div>
                        <div class="username">
                            &nbsp;
                            NURHAYATI 1
                        </div>
                        <div class="ratingdesc">
                            recommends this product!
                        </div>
                    </div>
                    <div reviews>
                        sabun nya wangi banget, anakku jadi seneng kalo mandi xixixi
                    </div>
                </div>
            </div>

            <div class="scroll-area">
                <div class="foto-produk">
                    <img src="/img/section4_photo-product.png" alt="">
                </div>
                <div class="isi">
                    <div class="nama-produk">
                        Johnsons Baby
                    </div>
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
                            <p>
                                &nbsp; 4.9 &nbsp;
                            </p>
                        </div>
                        <div class="total-rating">
                            <p>
                                (250 people)
                            </p>
                        </div>
                    </div>
                    <div class="person">
                        <div class="foto-profile">
                            <img src="/img/section4_profile-picture.png" alt="">
                        </div>
                        <div class="nama-profile">
                                NURHAYATI 1 <a href="#">ALL REVIEWS</a>
                        </div>
                    </div>
                    <div class="rekomen">
                        <div class="jempol">
                            <img src="/img/section4_jempol-rekomen.png" alt="">
                        </div>
                        <div class="username">
                            &nbsp;
                            NURHAYATI 1
                        </div>
                        <div class="ratingdesc">
                            recommends this product!
                        </div>
                    </div>
                    <div class="reviews">
                        sabun nya wangi banget, anakku jadi seneng kalo mandi xixixi
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 text-center zoom">
                <a href="./nextpage.html">
                    <button type="button" class="btn btn-primary">See More</button>
                </a>
            </div>
        <!-- <div class="button">
            <a class="asu" href="#">
                <p>
                    SEE MORE
                </p>
            </a>
        </div> -->
    </section>
    <footer>
        <div>
            <p> INI FOOTER NANTI </p>
        </div>
    </footer>
        
</div>
@endsection