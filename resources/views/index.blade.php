@extends('layout.main')

@section('css')
    {{-- <link rel="stylesheet" href="/css/style.css"> --}}
    <link rel="stylesheet" href="/css/home1.css">
    {{-- <link rel="stylesheet" href="/css/navbar.css"> --}}
@endsection


@section('title')
 <title>Hamily</title>
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
                <a href="/book">
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
                @foreach ($articles as $a)
                <div class="col-md-4 px-3">
                    <a href="/article/detail/{{ $a->id }}">
                        <img src="https://source.unsplash.com/350x350/?{{ $a->category->name }}" alt="" class="img-fluid">  
                    </a>
                    <div class="articleTitle fw-bold">
                        <a href="/article/detail/{{ $a->id }}" class="text-decoration-none text-white">
                            <h5 class="fw-bold">{{ $a->title }}</h5>
                        </a>
                    </div>
                    <div class="articleDesc">
                        {{ Str::limit($a->body,150, '...')}}
                        <a href="/article/detail/{{ $a->id }}">(continue)</a>
                    </div>                
                </div>
                @endforeach
            </div>
            <div class="col-md-12 text-center zoom">
                <a href="/article">
                    <button type="button" class="btn btn-primary">See More</button>
                </a>
            </div>
        </div>
    </div>
    <!-- ----------------------------------ARTICLE SECTION END---------------------------------- -->

    <!-- ----------------------------------MENFESS SECTION---------------------------------- -->
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
                @foreach ($menfess as $m)
                    <a href="/menfess/detail/{{ $m->id }}" class="text-decoration-none text-black">
                        <div class="scroll-area">
                            <div class="question">
                                <p>
                                    {{ $m->title }}
                                </p>
                            </div>
                            <hr>
                            @if ($m->menfessReply->count())
                                <div class="persona">
                                    <div class="foto-profile">
                                        <img src="/img/section 3_profile-picture.png" alt="">
                                    </div>
                                    <div class="nama-profile">
                                        <div class="nama">
                                            {{ $m->menfessReply[0]->users->username }}
                                        </div>
                                    </div>
                                </div>
                                <div class="content mt-2">
                                    @if ($m->menfessReply[0]->reply_image)
                                        <div class="row mx-1">
                                            <img src="{{asset('storage/'.$m->menfessReply[0]->reply_image)}}" class="img-thumbnail" alt="..." style="max-width: 550px;max-height: 275px">
                                        </div>
                                    @endif
                                    <p>
                                        <a href="" class="text-decoration-none text-black">
                                            <p>{{$m->menfessReply[0]->reply_text}} <span class="text-primary">(lanjut)</span></p>
                                        </a>
                                    </p>
                                </div>
                            @endif
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="col-md-12 text-center zoom">
                <a href="/menfess">
                    <button type="button" class="btn btn-primary">See More</button>
                </a>
        </div>
    </section>
    <!-- ----------------------------------MENFESS SECTION END---------------------------------- -->

    <!-- ----------------------------------RATING REVIEW SECTION---------------------------------- -->
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
                @foreach ($products as $prod)
                    <a href="/rating/detail/{{ $prod->id }}" class="text-decoration-none text-black">
                        <div class="scroll-area">
                            <div class="foto-produk">
                                @if ($prod->form_image)
                                    <img src="{{ asset('storage/'. $prod->form_image) }}" alt="" class="img-fluid img-thumbnail" style="min-width: 148px;max-width: 149px;min-height: 282px ;max-height: 283px ;overflow: hidden;">
                                @endif
                            </div>
                            <div class="isi ms-2">
                                <div class="nama-produk">
                                    <!-- <h5> -->
                                        {{ $prod->name_product }}
                                    <!-- </h5> -->
                                    <div class="jenis-produk">
                                        {{ $prod->type_product }}
                                    </div>
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
                                        <!-- <p> -->
                                            &nbsp; {{ $prod->rating }}&nbsp;
                                        <!-- </p> -->
                                    </div>
                                    <div class="total-rating">
                                        <!-- <p> -->
                                            ({{ $prod->total_review }} {{ ($prod->total_review > 1) ? 'peoples' : 'people'}}) 
                                        <!-- </p> -->
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
                @endforeach
            </div>
        </div>
        <div class="col-md-12 text-center zoom">
            <div class="col-md-12 text-center zoom">
                <a href="/rating" class="text-decoration-none text-white">
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
    <!-- ----------------------------------RATING REVIEW SECTION END---------------------------------- -->
    
        
</div>
@endsection