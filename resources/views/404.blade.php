@extends('layout.main')
@push('after-style')
    <style>
        body {
            background-color: #A4CFFF;
        }

        .navigasi {
            display: none
        }
    </style>

@endpush

@section('title')
    <title>Hamily | Page Not Found</title>
@endsection

@section('container')
    <div class="container d-flex flex-column align-items-center" style="margin-top: 20%">
        <img src="/img/logo.png" alt="" width="300">
        <h4>
            <strong>404 | PAGE NOT FOUND</strong>
        </h4>
        <a href="/">
            <button class="btn btn-primary mt-3" type="submit" style="border-radius: 10px">Back to Home Page</button>
        </a>
    </div>
@endsection