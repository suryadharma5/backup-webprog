@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="/css/formDoctor.css">
@endsection

@section('contents')
    {{-- @dd($doctor); --}}
    <div class="container">
        <section class="back-button mt-4">
            <div class="button">
                <a href="/book/{{ $doctor->id }}">
                    <img src="/img/back-button.png" alt="">
                </a>
            </div>
        </section>
    
        <div class="box border py-4 px-3 border-3 mt-4" style="border-radius: 10px">
            <h3 class="fw-bold">Pastikan Pilihan Anda Sudah Tepat</h3>
            <div class="wrap d-flex flex-row bg-primary">
                <div class="col-lg-2">
                    <img src="/img/foto-dokter.png" alt="" class="img-fluid d-block">
                </div><div class="col-lg-9">
                    <h3 class="fw-bold">Dr. Ida Ayu Putri Maharani</h3>
                </div>
            </div>
        </div>
    </div>
@endsection