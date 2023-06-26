@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="/css/article.css">
    {{-- <link rel="stylesheet" href="/css/navbar.css"> --}}
@endsection

@section('title')
    <title>Hamily | {{ $title }}</title>
@endsection

@section('contents')
    <div class="container mt-4 bg">
        <div class="row justify-content-center mb-3">
            <div class="col-md-6">
            <form action="/blog" method="GET"> 
                @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
    
                @if (request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
    
                <div class="row">
                    <input type="text" class="form-control searchBar col shadow" placeholder="Search" name="search" value="{{ request('search') }}">
                    <button class="searchButton col-md-1" type="submit" id="button-addon2">
                        <i class="bi bi-search searchIcon"></i>
                    </button>
                </div>
            </form>
            </div>
        </div>
    
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-9 mx-0 px-0">
                                <img src="/img/carousel-slide1.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="col" style="background-color: #BBA1A0">
                                <h5 style="font-size: 2.5vw; font-weight: bold; font-family: 'Baloo 2', cursive;">
                                    101 Tips Untuk Kamu yang Baru Menikah
                                </h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-9 mx-0 px-0">
                                <img src="/img/carousel-slide1.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="col" style="background-color: #BBA1A0">
                                <h5 style="font-size: 2.5vw; font-weight: bold; font-family: 'Baloo 2', cursive;">
                                    101 Tips Untuk Kamu yang Baru Menikah
                                </h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-9 mx-0 px-0">
                                <img src="/img/carousel-slide1.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="col" style="background-color: #BBA1A0">
                                <h5 style="font-size: 2.5vw; font-weight: bold; font-family: 'Baloo 2', cursive;">
                                    101 Tips Untuk Kamu yang Baru Menikah
                                </h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    
        <ul class="nav nav-underline justify-content-center mt-3 align-items-center tabControl mt-5" id="myTab" role="tablist" style="background-color: #FFB8C7; border-radius:10px">
            <li class="nav-item">
              <a class="nav-link tab-aja active" href="#content1" id="tab1" data-bs-toggle="tab" href="#content1" role="tab" aria-controls="content1" aria-selected="true">Mom's Corner</a>
            </li>
            <li class="nav-item">
              <a class="nav-link tab-aja" href="#content2" id="tab2" data-bs-toggle="tab" href="#content2" role="tab" aria-controls="content2" aria-selected="false">Dad's Corner</a>
            </li>
            <li class="nav-item">
              <a class="nav-link tab-aja" href="#content3" id="tab3" data-bs-toggle="tab" href="#content3" role="tab" aria-controls="content3" aria-selected="false">Mom & Dad's Corner</a>
            </li>
            <li class="nav-item">
              <a class="nav-link tab-aja" href="#content4" id="tab4" data-bs-toggle="tab" href="#content4" role="tab" aria-controls="content4" aria-selected="false">Family's Corner</a>
            </li>
            <li class="nav-item">
              <a class="nav-link tab-aja" href="#content5" id="tab5" data-bs-toggle="tab" href="#content5" role="tab" aria-controls="content5" aria-selected="false">Everyone's Corner</a>
            </li>
        </ul>


        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="content1" role="tabpanel" aria-labelledby="tab1">
                <!-- Content for Tab 1 -->
                <a href="" class="row mt-5 box-article-tab">
                    <div class="col-6">
                        <img src="/img/gb-artikel-tab.png" alt="" href="#">
                    </div>
                    <div class="col-4 mt-5">
                        <div class="title">Ibu, Jaga Buah Hati Dengan Makanan Ini</div>
                        <div class="date-posted">Posted on Wed, April 4th 2023</div>
                    </div>
                    <div class="col">
                    </div>
                </a>
                <a href="" class="row mt-5 box-article-tab">
                    <div class="col-6">
                        <img src="/img/gb-artikel-tab.png" alt="" href="#">
                    </div>
                    <div class="col-4 mt-5">
                        <div class="title">Ibu, Jaga Buah Hati Dengan Makanan Ini</div>
                        <div class="date-posted">Posted on Wed, April 4th 2023</div>
                    </div>
                    <div class="col">
                    </div>
                </a>
                <a href="" class="row mt-5 box-article-tab">
                    <div class="col-6">
                        <img src="/img/gb-artikel-tab.png" alt="" href="#">
                    </div>
                    <div class="col-4 mt-5">
                        <div class="title">Ibu, Jaga Buah Hati Dengan Makanan Ini</div>
                        <div class="date-posted">Posted on Wed, April 4th 2023</div>
                    </div>
                    <div class="col">
                    </div>
                </a>
            </div>
            <div class="tab-pane fade" id="content2" role="tabpanel" aria-labelledby="tab2">
                <!-- Content for Tab 2 -->
                @for ($i = 0; $i < 3; $i++)
                    <a href="" class="row mt-5 box-article-tab">
                        <div class="col-6">
                            <img src="/img/gb-artikel-tab.png" alt="" href="#">
                        </div>
                        <div class="col-4 mt-5">
                            <div class="title">Ibu, Jaga Buah Hati Dengan Makanan Ini 2</div>
                            <div class="date-posted">Posted on Wed, April 4th 2023</div>
                        </div>
                        <div class="col">
                        </div>
                    </a>
                @endfor
            </div>
            <div class="tab-pane fade" id="content3" role="tabpanel" aria-labelledby="tab3">
                <!-- Content for Tab 3 -->
                @for ($i = 0; $i < 3; $i++)
                    <a href="" class="row mt-5 box-article-tab">
                        <div class="col-6">
                            <img src="/img/gb-artikel-tab.png" alt="" href="#">
                        </div>
                        <div class="col-4 mt-5">
                            <div class="title">Ibu, Jaga Buah Hati Dengan Makanan Ini 3</div>
                            <div class="date-posted">Posted on Wed, April 4th 2023</div>
                        </div>
                        <div class="col">
                        </div>
                    </a>
                @endfor
            </div>
            <div class="tab-pane fade" id="content4" role="tabpanel" aria-labelledby="tab4">
                <!-- Content for Tab 3 -->
                @for ($i = 0; $i < 3; $i++)
                    <a href="" class="row mt-5 box-article-tab">
                        <div class="col-6">
                            <img src="/img/gb-artikel-tab.png" alt="" href="#">
                        </div>
                        <div class="col-4 mt-5">
                            <div class="title">Ibu, Jaga Buah Hati Dengan Makanan Ini 4</div>
                            <div class="date-posted">Posted on Wed, April 4th 2023</div>
                        </div>
                        <div class="col">
                        </div>
                    </a>
                @endfor
            </div>
            <div class="tab-pane fade" id="content5" role="tabpanel" aria-labelledby="tab5">
                <!-- Content for Tab 3 -->
                @for ($i = 0; $i < 3; $i++)
                    <a href="" class="row mt-5 box-article-tab">
                        <div class="col-6">
                            <img src="/img/gb-artikel-tab.png" alt="" href="#">
                        </div>
                        <div class="col-4 mt-5">
                            <div class="title">Ibu, Jaga Buah Hati Dengan Makanan Ini 5</div>
                            <div class="date-posted">Posted on Wed, April 4th 2023</div>
                        </div>
                        <div class="col">
                        </div>
                    </a>
                @endfor
            </div>
        </div>


        
            
       
    </div>
@endsection