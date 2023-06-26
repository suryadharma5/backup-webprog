@extends('layout.main')

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

        <!-- <div id="carouselExampleAutoplaying" class="carousel slide mt-5" data-bs-ride="carousel"> -->
            <!-- <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                        One of three columns
                        </div>
                        <div class="col-sm">
                        One of three columns
                        </div>
                        <div class="col-sm">
                        One of three columns
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div class="carousel-inner"> -->
                <!-- <div class="container">    
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-8">
                                <img src="/img/carousel-slide1.png" class=" col-8 d-block w-100" alt="...">
                            </div>
                            <div class="col-sm">
                            One of three columns
                            </div>
                        </div>
                    </div>
                    
                </div> -->
                
                <!-- <div class="container">
                    <div class="row carousel-item active">
                        <img src="/img/carousel-slide1.png" class=" col-8 d-block w-100" alt="...">
                        <p class="col-4">
                            INI NANTI TEKSNYA
                        </p>
                    </div>
                </div>
                <div class="carousel-item active">
                    <img src="/img/carousel-slide1.png" class=" col-8 d-block w-100" alt="...">
                    <p class="col-4">
                        INI NANTI TEKSNYA 2
                    </p>
                </div>
                <div class="carousel-item active">
                    <img src="/img/carousel-slide1.png" class=" col-8 d-block w-100" alt="...">
                    <p class="col-4">
                        INI NANTI TEKSNYA 3
                    </p>
                </div> -->
                <!-- <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
                </div> -->
            <!-- </div> -->
            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> -->

            <!-- <div class="carousel-inner d-block">
                <div class="carousel-item active">
                <img src="/img/slide1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="/img/slide1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="/img/slide1.png" class="d-block w-100" alt="...">
                </div>
            </div> -->
    
            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
        
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> -->
            
        <!-- </div> -->
        
        <!-- <div class="carousel-indicators bg-primary">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div> -->

        <!-- <ul class="nav nav-underline justify-content-center mt-3 align-items-center tabControl">
            <li class="nav-item">
              <a class="nav-link underline active" href="#" >Mom's Corner</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Dad's Corner</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Mom & Dad's Corner</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Family's Corner</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Everyone's Corner</a>
            </li>
            
        </ul> -->
    
        <!-- <div class="col-lg-6">
            <img src="/img/slide1.png" alt="">
        </div>
        <div style="margin-bottom: 100px">
    
        </div> -->
    </div>
@endsection