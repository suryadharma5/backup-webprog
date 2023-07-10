@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="/css/detailArticle.css">
@endsection

@section('title')
    <title>Hamily | {{ $title }}</title>
@endsection

@section('contents')
    {{-- Section 1 --}}
    <div class="container-fluid sec-1" style="height: 500px">
        <div class="container">
            <a href="/article">
                <img src="/img/Go-Back.png" alt="" width="50" height="50" class="img-fluid mt-5">
            </a>
            <p class="text-decoration-underline mt-4 text-white">{{ $article->category->name }}</p>
            <h2 class="text-white fw-bold">{{ $article->title }}</h2>
            <p class="text-white">Posted on {{ $article->day }}, {{ $article->month }} {{ $article->date }} {{ $article->year }}</p>
        </div>
    </div>
    <div class="container col">
        {{-- <img src="/img/bayi-article.png" alt="" class="img-fluid mx-auto d-block gambar mb-4" width="1180px"> --}}
        @if ($article->imageUrl)
            <img src="{{asset('storage/'.$article->imageUrl)}}" class="img-fluid mx-auto d-block gambar mb-4" alt="..." style="min-width: 1200px; max-width: 1200px; min-height: 550px; max-height: 550px">
        @else
            <img src="https://source.unsplash.com/1200x550/?{{ $article->category->name }}" alt="" class="img-fluid mx-auto d-block gambar mb-4">
        @endif
        <p class="mt-3">{!! $article->body !!}</p>

    </div>
    <div class="container">
    </div>
    <div class="container paragraph mt-3">
    </div>
    
@endsection