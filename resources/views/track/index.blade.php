@extends('layout.main')

@section('css')
        {{-- <link rel="stylesheet" href="/css/trackInput1.css"> --}}
        <link rel="stylesheet" href="/css/trackInfo.css">
@endsection

@section('title')
<title>Hamily | {{ $title }}</title>
@endsection

@section('contents')

    <div class="container mt-5 mb-5 ">
        <div class="card position-absolute start-50 translate-middle-x" style="width: 804px; height:494px; border-radius:10px">
            <div class="card-body">
                <div class="row d-flex justify-content-center my-2">
                    <img src="/img/trackStage.png"  alt="" style="width: 456px">
                </div>
                <h3 class="card-title text-center title">Start Your Tracking Journey!</h3>
                <p class="card-text desc">Tracking is a feature that helps pregnant moms track their pregnancy.
                    With this feature, you may get an update about the age, size, and other important information about your unborn baby.
                    Before using this feature, there is some information that we need to know about your pregnancy. Let's answer the question
                    and get accurate informations!
                </p>
                <div class="row desc">
                    {{-- <button type="button" class="btn text-white" style="width: 217px; "></button> --}}
                    <div class="col"></div>
                    <div class="col-4 conBtn" style="margin-left: -100px">
                        <a href="/track/form" class="text-decoration-none text-white float-end mt-2 rounded-0"  style="background-color: #78A2CC;">
                            <button type="button" class="btn text-white">
                                Agree & Continue
                            </button>
                        </a>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </div>
        <div class="container" style="height: 100px"></div>
    </div>

    @push('css-footer')
        <style>
            footer {
                display: none
            }
        </style>
    @endpush

@endsection
