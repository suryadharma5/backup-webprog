@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="/css/trackInfo.css">
    <link rel="stylesheet" href="/css/trackInput1.css">
@endsection

@section('contents')
    <div class="full-width-content">
        <div class="box"></div>
        <div class="infoBox">
            <div class="exp">
                <img src="./Picture/trackStage.png" alt="" class="trackStage">
                <h1 class="title">Start your Tracking Journey!</h1>
                <center>
                    <p class="desc">
                        Tracking adalah fitur yang membantu para ibu hamil untuk
                        memantau janin dalam kandungannya. Dengan fitur ini,
                        pengguna mendapatkan update mengenai usia, ukuran, dan
                        info penting seputar janin dalam rahim. Diperlukan beberapa
                        informasi dari pengguna untuk menunjang keakuratan fitur ini.
                        Simak dan isi pertanyaan berikut sesuai kondisi anda untuk memulai tracking!
                    </p>
                </center>
            </div>
            <div class="continue">
                <a href="trackInput1.html">
                    <button class="yes">
                        Agree & Continue
                    </button>
                </a>
            </div>
        </div>
    </div>
@endsection
    
