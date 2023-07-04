@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="/css/track.css">
@endsection

@section('contents')
    <div class="containe">
        <div class="full-width-content">
            <div class="row mx-0 px-0" style="background-color: #FFF7F6;padding-bottom: 100px;">
                <div class="col d-flex justify-content-center pt-3">
                    <div class="track-progress">
                        <div class="circular">
                            <div class="inner"></div>
                            <div class="dot"></div>
                            <div class="circle">
                                <div class="bar left">
                                    <div class="progress"></div>
                                </div>
                                <div class="bar right">
                                    <div class="progress"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" style="padding-right: 150px;">
                    <div class="main-text fs-1 fw-bold pt-5 z-2">
                        Usia si kecil <mark id="demo" class="rounded-3 numb" style="background: #FFB8C7!important">30</mark> minggu, <br>dia sudah sebesar semangka!
                    </div>
                    <div class="desc">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto placeat perferendis, neque cumque, et nemo quam magnam aperiam praesentium maxime ut maiores consequuntur autem non. Totam earum non, voluptatem possimus laudantium iusto voluptatum officia porro labore esse modi quidem distinctio necessitatibus dolorum, eos eligendi cumque, omnis architecto ducimus placeat nulla. Nemo consequuntur atque ullam. Dicta itaque iste ducimus doloribus consequuntur sapiente corrupti nobis molestias fuga! Ut ipsum vitae asperiores in accusamus tempora placeat, quae voluptates tempore culpa corrupti accusantium natus ratione eaque neque? Ipsa perspiciatis vitae, est, quia tempore facilis saepe voluptatibus iusto obcaecati, error alias illum quo nobis aspernatur.
                    </div>
                </div>
            </div>
            <div class="mx-0 px-0" style="background-color: #78A2CC;">
                <img src="/img/awan.png" alt="" style="width: 100%">
            </div>
            <div class="row fw-bold mx-0 px-0" style="background-color: #78A2CC;">
                <p class="fs-1 pb-5 text-light text-center">Tentang Kandungan</p>
                <div class="col-2"></div>
                <div class="col-4 justify-content-center">
                    <img src="/img/baby-birth.png" alt="" style="width: 80%">
                </div>
                <div class="col-1 fs-4 text-light">
                    <div class="row my-4 py-3">Berat</div>
                    <div class="row my-4 py-3">Panjang</div>
                    <div class="row my-4 py-3">Trimester</div>
                </div>
                <div class="col-3 fs-4">
                    <div class="iden row my-4 bg-light rounded-3">
                        <div class="col text-light d-flex justify-content-center rounded-3 py-3" style="background-color: #FFB8C7;">48</div>
                        <div class="col d-flex justify-content-center rounded-end-3 py-3">gram</div>
                    </div>
                    <div class="iden row my-4 bg-light rounded-3">
                        <div class="col text-light d-flex justify-content-center rounded-3 py-3" style="background-color: #FFB8C7;">123</div>
                        <div class="col d-flex justify-content-center rounded-end-3 py-3">cm</div>
                    </div>
                    <div class="iden row my-4 bg-light rounded-3">
                        <div class="col text-light d-flex justify-content-center rounded-3 py-3" style="background-color: #FFB8C7;">3</div>
                        <div class="col d-flex justify-content-center rounded-end-3 py-3">/3</div>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
            <div class="row pt-5 mx-0 px-0 mb-5" style="background-color: #78A2CC; height: 500px">
                <div class="col-3"></div>
                <div class="col-6">
                    <div class="row justify-content-end fs-3 fw-bold text-light pb-2 me-2">Hari Perkiraan Lahir</div>
                    <div class="row" style="color: #78A2CC;">
                        <div class="col d-flex bg-light my-3 justify-content-center align-items-end rounded-start-3 pt-2">
                            <p class="fs-1 fw-bold">123 hari</p>
                            <p class="ms-3 pb-3 fw-semibold">menuju persalinan</p>
                        </div>
                        <div class="col bg-light d-flex justify-content-center rounded-3">
                            <div class="text-center mt-2">
                                <p class="fw-bold fs-1">17 Mei 2023</p>
                                <p class="fw-semibold">(13 Mei - 20 Mei 2023)</p></div>
                        </div>
                    </div>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </div>
    @push('css-footer')
            <style>
                footer {
                    margin-top: -270px
                }
            </style>
    @endpush
    <script src="/js/track.js"></script>
@endsection
    
    
