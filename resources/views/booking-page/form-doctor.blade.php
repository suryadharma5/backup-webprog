@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="/css/formDoctor.css">
@endsection

@section('contents')
    <div class="container">
        <section class="back-button mt-4">
            <div class="button">
                <a href="/book">
                    <img src="/img/back-button.png" alt="">
                </a>
            </div>
        </section>
    
        <div class="box border py-4 px-3 border-3 mt-4" style="border-radius: 10px">
            <h3 class="fw-bold">Pastikan Pilihan Anda Sudah Tepat</h3>
            <div class="row">
                <div class="col-lg-2 bg-primary">
                    <img src="/img/foto-dokter.png" alt="" class="img-fluid d-block">
                </div>
            </div>
        </div>
    </div>
@endsection