@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="/css/hplhpht.css">
@endsection

@section('contents')   
    <div class="col-lg-12 containers">
        <img src="/img/ibu-hamil.png" style="position: absolute;top:0;z-index:-1; width:100%">
        <div class="row g-0 justify-content-center align-items-center box-formulir-keseluruhan">
            <a href="" class="col-1 g-0 d-flex justify-content-center align-items-center">
                <img src="/img/back-form-kalender-hover.png" class="col-6" id="prev-bottom" onmouseenter="hoverinPrev(this)" onmouseleave="hoveroutPrev(this)">
            </a> 
            <div class="col-4 g-0 ">
                <div class="row g-0 formulir-kalender">
                    <form class="pt-5">
                        <div class="col-12 form-group d-flex justify-content-center">
                            <div class="col-10">
                                <div class="row g-0 input-group date" id="datepicker">
                                    <input type="text" class="form-control col-10" placeholder="Masukkan hari perkiraan lahir (HPL)" >
                                    <span class="input-group-append col-2">
                                        <span class="button-calendar bg-white d-block col-12 d-flex justify-content-center align-items-center "> 
                                            {{-- input-group-text  --}}
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </form>

                    <a href="/hpht" class="hpl-text text-center mt-3 mb-5" style="width: 100%">
                        Belum mengetahui HPL anda?
                    </a>

                </div>

            </div>
            <div class="col-1">
                
            </div>
        </div>
        <div class="bt-bayi" style="width: 100%">
            <a href="" class="link-button-start-tracking">
                <img src="/img/button-tracking.png" class="button-kalender" style="position: absolute; z-index:1">
                <div class="text-start-tracking col-1 text-center" style="position: absolute; z-index: 2">
                    Start
                </div>
                <div class="text-tracking col-1 text-center" style="position: absolute; z-index: 2">
                    Tracking
                </div>
            </a>

        </div>
    </div>

           
    <script type="text/javascript">
        $(function() {
            $('#datepicker').datepicker({
                'format': 'dd-mm-yyyy',
                'autoclose': true
            });
        });
    </script>

    <script src="/js/calendar.js"></script>
@endsection
