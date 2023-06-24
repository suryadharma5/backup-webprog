@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="/css/navbar.css">
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
    
        <div id="carouselExampleAutoplaying" class="carousel slide mt-5" data-bs-ride="carousel">
            <div class="carousel-inner d-block">
                <div class="carousel-item active">
                <img src="/img/slide1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="/img/slide1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="/img/slide1.png" class="d-block w-100" alt="...">
                </div>
            </div>
    
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
        
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
    
        </div>
    
        <ul class="nav nav-underline justify-content-center mt-3 align-items-center tabControl">
            <li class="nav-item">
              <a class="nav-link underline active text-decoration-none text-black" href="#" >Mom's Corner</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-black" href="#">Dad's Corner</a>
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
            
        </ul>
    
        <div class="col-lg-6">
            {{-- <img src="/img/slide1.png" alt=""> --}}
        </div>
        <div style="margin-bottom: 100px">
    
        </div>
    </div>
@endsection