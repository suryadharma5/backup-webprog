@extends('layout.main')

@push('after-style')
    <style>
        body {
            background-color: #A4CFFF;
        }

        /* .navigasi {
            display: none
        } */

        *{
            font-family: 'Baloo 2', cursive;
        }

        /* .footer{
            display: none
        } */
    </style>
@endpush

@section('title')
    <title>Hamily | FORBIDDEN</title>
@endsection

@section('contents')
    <div class="container d-flex flex-column align-items-center" style="margin-top: 20%">
        <img src="/img/logo.png" alt="" width="300">
        <h4>
            <strong>403 | FORBIDDEN</strong>
        </h4>
        <a href="/">
            <button class="btn mt-3 text-white fw-bold" type="submit" style="border-radius: 10px; background-color: #FFB8C7">Back to Home Page</button>
        </a>
    </div>
@endsection