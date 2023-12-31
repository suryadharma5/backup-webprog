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
        <div class="row">
            <div class="col-md-12 mt-2">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
        
                    <div class="carousel-inner" style="height: 50%">
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-9 mx-0 px-0">
                                        {{-- <img src="/img/carousel-slide1.png" class="d-block" alt="..." style="width: 100%; height: 450px;"> --}}
                                        <a href="/article/detail/{{ $articles[0]->id }}">
                                            @if ($articles[0]->imageUrl)
                                                <img src="{{asset('storage/'.$articles[0]->imageUrl)}}" class="img-fluid" alt="..." style="min-width: 1200px; max-width: 1200px; min-height: 450px; max-height: 450px">
                                            @else
                                                <img src="https://source.unsplash.com/1200x450/?{{ $articles[0]->category->name }}" alt="" class="img-fluid">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="col-lg-3 d-flex flex-column justify-content-center" style="background-color: #BBA1A0">
                                        <a href="/article/detail/{{ $articles[0]->id }}" class="text-decoration-none">
                                            <h5 class="text-white fw-bold" style="font-size: 2.5vw;">
                                                {{ $articles[0]->title }}
                                            </h5>
                                        </a>
                                        <a href="#" class="text-white">
                                            {{ $articles[0]->category->name }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="carousel-item">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-9 mx-0 px-0">
                                        {{-- <img src="/img/carousel-slide1.png" class="d-block" alt="..." style="width: 100%; height: 450px;"> --}}
                                        <a href="/article/detail/{{ $articles[1]->id }}">
                                            <img src="https://source.unsplash.com/1200x450/?{{ $articles[1]->category->name }}" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col-lg-3 d-flex flex-column justify-content-center" style="background-color: #BBA1A0">
                                        <a href="/article/detail/{{ $articles[1]->id }}" class="text-decoration-none">
                                            <h5 class="text-white fw-bold" style="font-size: 2.5vw;">
                                                {{ $articles[1]->title }}
                                            </h5>
                                        </a>
                                        <a href="#" class="text-white">
                                            {{ $articles[1]->category->name }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="carousel-item">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-9 mx-0 px-0">
                                        {{-- <img src="/img/carousel-slide1.png" class="d-block" alt="..." style="width: 100%; height: 450px;"> --}}
                                        <a href="/article/detail/{{ $articles[2]->id }}">
                                            <img src="https://source.unsplash.com/1200x450/?{{ $articles[2]->category->name }}" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col-lg-3 d-flex flex-column justify-content-center" style="background-color: #BBA1A0">
                                        <a href="/article/detail/{{ $articles[2]->id }}" class="text-decoration-none">
                                            <h5 class="text-white fw-bold" style="font-size: 2.5vw;">
                                                {{ $articles[2  ]->title }}
                                            </h5>
                                        </a>
                                        <a href="#" class="text-white">
                                            {{ $articles[2]->category->name }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button> --}}
                </div>
            </div>
        </div>
    
        <ul class="nav nav-underline justify-content-evenly mt-3 align-items-center tabControl" id="myTab" role="tablist" style="background-color: #FFB8C7; border-radius:10px">
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
            {{-- Mom's corner --}}
            <div class="tab-pane fade show active" id="content1" role="tabpanel" aria-labelledby="tab1">
                <!-- Content for Tab 1 -->
                @foreach ($articles as $a)
                    @if ($a->category->id == 1)
                        <a href="/article/detail/{{ $a->id }}" class="row mt-3 box-article-tab">
                            <div class="lg-5 d-flex flex-row">
                                @if ($a->imageUrl)
                                    <img src="{{asset('storage/'.$a->imageUrl)}}" class="img-thumbnail" alt="..." style="min-width: 450px; max-width: 450px; min-height: 250px; max-height: 250px">
                                @else
                                    <img src="https://source.unsplash.com/450x250/?{{ $a->category->name }}" alt="" class="img-thumbnail">  
                                @endif
                                {{-- <img src="/img/gb-artikel-tab.png" class="img-thumbnail" alt="" href="#"> --}}
                                <div class="col-lg mt-5 mx-3 ">
                                    <h1 class="col-lg-8 fw-bold">{{ $a->title }}</h1>
                                    <div class="date-posted">Posted on {{ $a->day }}, {{ $a->date }} {{ $a->month }} {{ $a->year }}</div>
                                </div>
                            </div>
                        </a>
                    @endif
                @endforeach
            </div>
            {{-- Mom's corner end --}}

            {{-- Dad's corner --}}
            <div class="tab-pane fade" id="content2" role="tabpanel" aria-labelledby="tab2">
                <!-- Content for Tab 2 -->
                @foreach ($articles as $a)
                    @if ($a->category->id == 2)
                        <a href="/article/detail/{{ $a->id }}" class="row mt-3 box-article-tab">
                            <div class="lg-5 d-flex flex-row">
                                @if ($a->imageUrl)
                                    <img src="{{asset('storage/'.$a->imageUrl)}}" class="img-thumbnail" alt="..." style="min-width: 450px; max-width: 450px; min-height: 250px; max-height: 250px">
                                @else
                                    <img src="https://source.unsplash.com/450x250/?{{ $a->category->name }}" alt="" class="img-thumbnail">  
                                @endif
                                <div class="col-lg mt-5 mx-3 ">
                                    <h1 class="col-lg-8 fw-bold">{{ $a->title }}</h1>
                                    <div class="date-posted">Posted on {{ $a->day }}, {{ $a->date }} {{ $a->month }} {{ $a->year }}</div>
                                </div>
                            </div>
                        </a>
                    @endif
                @endforeach
            </div>
            {{-- Dad's corner end --}}

            {{-- Mom & Dad's corner --}}
            <div class="tab-pane fade" id="content3" role="tabpanel" aria-labelledby="tab3">
                <!-- Content for Tab 3 -->
                @foreach ($articles as $a)
                    @if ($a->category->id == 3)
                        <a href="/article/detail/{{ $a->id }}" class="row mt-3 box-article-tab">
                            <div class="lg-5 d-flex flex-row">
                                @if ($a->imageUrl)
                                    <img src="{{asset('storage/'.$a->imageUrl)}}" class="img-thumbnail" alt="..." style="min-width: 450px; max-width: 450px; min-height: 250px; max-height: 250px">
                                @else
                                    <img src="https://source.unsplash.com/450x250/?{{ $a->category->name }}" alt="" class="img-thumbnail">  
                                @endif
                                <div class="col-lg mt-5 mx-3 ">
                                    <h1 class="col-lg-8 fw-bold">{{ $a->title }}</h1>
                                    <div class="date-posted">Posted on {{ $a->day }}, {{ $a->date }} {{ $a->month }} {{ $a->year }}</div>
                                </div>
                            </div>
                        </a>
                    @endif
                @endforeach
            </div>
            {{-- Mom & Dad's corner end --}}


            {{-- Family's corner --}}
            <div class="tab-pane fade" id="content4" role="tabpanel" aria-labelledby="tab4">
                <!-- Content for Tab 3 -->
                @foreach ($articles as $a)
                    @if ($a->category->id == 4)
                        <a href="/article/detail/{{ $a->id }}" class="row mt-3 box-article-tab">
                            <div class="lg-5 d-flex flex-row">
                                @if ($a->imageUrl)
                                    <img src="{{asset('storage/'.$a->imageUrl)}}" class="img-thumbnail" alt="..." style="min-width: 450px; max-width: 450px; min-height: 250px; max-height: 250px">
                                @else
                                    <img src="https://source.unsplash.com/450x250/?{{ $a->category->name }}" alt="" class="img-thumbnail">  
                                @endif
                                <div class="col-lg mt-5 mx-3 ">
                                    <h1 class="col-lg-8 fw-bold">{{ $a->title }}</h1>
                                    <div class="date-posted">Posted on {{ $a->day }}, {{ $a->date }} {{ $a->month }} {{ $a->year }}</div>
                                </div>
                            </div>
                        </a>
                    @endif
                @endforeach
            </div>
            {{-- Family's corner end --}}

            {{-- Everyone's corner --}}
            <div class="tab-pane fade" id="content5" role="tabpanel" aria-labelledby="tab5">
                <!-- Content for Tab 3 -->
                @foreach ($articles as $a)
                    @if ($a->category->id == 5)
                        <a href="/article/detail/{{ $a->id }}" class="row mt-3 box-article-tab">
                            <div class="lg-5 d-flex flex-row">
                                @if ($a->imageUrl)
                                    <img src="{{asset('storage/'.$a->imageUrl)}}" class="img-thumbnail" alt="..." style="min-width: 450px; max-width: 450px; min-height: 250px; max-height: 250px">
                                @else
                                    <img src="https://source.unsplash.com/450x250/?{{ $a->category->name }}" alt="" class="img-thumbnail">  
                                @endif
                                <div class="col-lg mt-5 mx-3 ">
                                    <h1 class="col-lg-8 fw-bold">{{ $a->title }}</h1>
                                    <div class="date-posted">Posted on {{ $a->day }}, {{ $a->date }} {{ $a->month }} {{ $a->year }}</div>
                                </div>
                            </div>
                        </a>
                    @endif
                @endforeach
            </div>
            {{-- Everyone's corner end --}}

        </div>


        
            
       
        </div>
@endsection