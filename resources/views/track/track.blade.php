@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="/css/track.css">
@endsection

@section('title')
    <title>Hamily | {{ $title }}</title>
@endsection

@section('contents')

    <div class="containe">
        <div class="full-width-content">
            <div class="row mx-0 px-0" style="background-color: #FFF7F6;padding-bottom: 100px;">
                <div class="col d-flex justify-content-center pt-3">
                    <div class="track-progress">
                        <div class="circular">
                            <div class="inner"></div>
                            <div id="dot" class="dot"></div>
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
                        Usia si kecil <mark id="demo" class="rounded-3 numb" style="background: #FFB8C7!important"></mark> minggu, <br>dia sudah sebesar {{ $data->buah }}!
                    </div>
                    <div class="desc">
                    {{ $data->deskripsi }}
                    </div>
                </div>
            </div>
            <!-- <img src="{{ $data->image_buah }}" alt="kosong"> -->
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
                        <div class="col text-light d-flex justify-content-center rounded-3 py-3" style="background-color: #FFB8C7;">{{ $data->weight }}</div>
                        <div class="col d-flex justify-content-center rounded-end-3 py-3">kg</div>
                    </div>
                    <div class="iden row my-4 bg-light rounded-3">
                        <div class="col text-light d-flex justify-content-center rounded-3 py-3" style="background-color: #FFB8C7;">{{ $data->height }}</div>
                        <div class="col d-flex justify-content-center rounded-end-3 py-3">cm</div>
                    </div>
                    <div class="iden row my-4 bg-light rounded-3">
                        <div class="col text-light d-flex justify-content-center rounded-3 py-3" style="background-color: #FFB8C7;">{{ $data->trimester }}</div>
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
                            <p id ="day" class="fs-1 fw-bold">123 day(s)</p>
                            <p class="ms-3 pb-3 fw-semibold">menuju persalinan</p>
                        </div>
                        <div class="col bg-light d-flex justify-content-center rounded-3">
                            <div class="text-center mt-2">
                                <p id="date" class="fw-bold fs-1">May 17 2023</p>
                                <p id="rangedate" class="fw-semibold">(13 Mei - 20 Mei 2023)</p></div>
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
    <script>
        window.onload = function() {
            // document.cookie = "index=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/track/trackRes;";
            var value = localStorage.getItem('passingval');
            let output = document.getElementById('demo');
            output.innerText = value;

            

            const numb = document.querySelector(".numb");
            let counter = 0;
            let temp = output.innerHTML;
            setInterval(()=>{
                if(counter==temp){
                    clearInterval();
                }else{
                    counter+=1;
                    numb.textContent=counter;
                }
            },120);

            degree = 8.57*value;
            inverse = Math.max(value, 21);
            // alert(value);
            
            var x = 0;
            var y = 0;
            
            if (inverse > 21) {
                x = 180;
                y = 8.57*(inverse-21);
            } else {
                x = degree;
                y = 0;
            }

            root = document.documentElement;
            root.style.setProperty('--change', degree+"deg");
            root.style.setProperty('--left', x+"deg");
            root.style.setProperty('--right', y+"deg");

            //tanggal perkiraan lahir
            var date = localStorage.getItem('passingdate');
            let output2 = document.getElementById('date');
            output2.innerText = date.slice(4,15);

            //hitung sisa hari menuju persalinan
            var dayto = localStorage.getItem('passingsisahari');
            let output3 = document.getElementById('day');
            output3.innerText = dayto+" day(s)";

            var before = new Date(date);
            before.setDate(before.getDate()-3);
            // console.log(before);

            var after = new Date(date);
            after.setDate(after.getDate()+3);
            // console.log(after);

            let output4 = document.getElementById('rangedate');
            let text = before.toString();
            let text1 = after.toString();
            
            // output4.innerText = "(" + bfr + " - " + after + ")";
            output4.innerText = "(" + text.slice(4,15) + " - " + text1.slice(4,15) + ")";

            // document.getElementById("rangedate").innerHTML = "aaaaaaaaa";

            
        };
    </script>

    <style>
        .circular .inner{
            /* display: none; */
            position: absolute;
            z-index: 6;
            top: 50%;
            left: 50%;
            height: 80px;
            width: 80px;
            margin: -40px 0 0 -40px;
            /* background: var(--BLUE2); */
            border-radius: 100%;
            /* background: url('{{ $backgroundImage }}'); */
            background: url('/img/agambar ({{$data->age-2}}).jpg');
            background-size: cover;
            /* box-shadow: 0 1px 0 rgba(0, 0, 0, 0.2); */
        }
    </style>
    <!-- <script src="/js/track.js"></script> -->
@endsection
    
    
