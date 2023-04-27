@extends('layout.main')

@section('title')
    <title>Hamily | {{ $title }}</title>
@endsection

@section('container')
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
@endsection