@extends('layout.main')

@section('title')
    <title>Hamily | {{ $title }}</title>
@endsection

@section('css')
     <link rel="stylesheet" href="/css/menfess.css">
@endsection

{{-- @dd($menfess) --}}

@section('contents')
    <div class="back container">
            <button type="button" class="btn"><i class ="fa fa-arrow-circle-left fa-xl" style="color: #78A2CC; marginleft:-1.5vw" aria-hidden="true"></i>
        </div>
    </a>
    <div class="container mt-4">
        <div class="container px-3 pt-4 text-white" style="background-color: #FFA5B8; display: flex; border-radius:10px; font-color: white;">
            <div class="col-10">
                <h3 class="fw-bold">{{ $menfess->title }}</h3>
                <p>asked by <span class="fw-bold">suryadharma5</span></p>
            </div>
            <div class="col-md-3 offset-md my-2 p-0">
                <div class="replies text-white fw-bold">
                    <button type="button" class="btn text-white fw-bold" style="background-color: #78A2CC;" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-pencil-square"></i>
                    Add reply </button>
                    {{-- <div class="modal-dialog modal-xl">add replai</div> --}}
                </div>
            </div>
        </div>
        <div class="card my-3" >
            <div class="card-body">
                <div class="row d-flex m-1">
                    <div class="col-1">
                        <img src="https://images.pexels.com/photos/771742/pexels-photo-771742.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" style="border-radius: 50%; width: 50px; height:50px; object-fit: cover;">
                    </div>
                    <div class="col-10" style="margin-left: -30px">
                        <p style="font-weight: bold;">Brian</p>
                        <p style="margin-top: -20px; color: gray;">Worker Dad</p>
                    </div>
                    <div class="col my-1">
                        <div class="row d-flex">
                            <div class="col-1">
                                <i class="fa-solid fa-heart fa-lg" style="color: #78a2cc;"></i>
                            </div>
                            <div class="col">
                                <p style="color: #78A2CC">{{ $menfess->total_likes }} likes</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mx-1">
                    <img src="{{ $menfess->menfess_image }}" class="card-img-top" alt="..." style="height: 380px; object-fit:cover;">
                </div>
                <div class="row m-1 mt-3">
                    <p>{{ $menfess->menfess_text }}</p>
                </div>
            </div>
        </div>

        {{-- Modal --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="width: 700px; height: 500px;">
            <div class="modal-content" style="height: 450px;">
                <div class="x-button d-flex flex-row-reverse mt-4" style="margin-right: -50px">
                    <button type="button" class="border-0 bg-transparent" data-bs-dismiss="modal"><i class="bi bi-x-lg" style="color: #FFA5B8; -webkit-text-stroke: 3px;"></i></button>
                </div>
                <div class="body p-0">
                    <div class="col-lg px-4">
                        <p class="my-0">
                            add reply to
                        </p>
                        <h5 class="fw-bold">Bagaimana cara mengubah hari Senin menjadi hari Minggu?</h5>
                        <div class="mb-3">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="9" placeholder="Type reply..." style="background-color: #C3E4F1"></textarea>
                        </div>
                        <div class="image-input d-flex flex-row col-lg-12 align-items-center">
                            <button type="button" id="photoButton" onclick="buttonClick()" class="border-0 bg-transparent" style="text-align: left; width:7%">
                                <i class="bi bi-image-fill fa-2x" style="color: #FFA5B8"></i>
                            </button>
                            <input type="file" name="reply-photo" id="reply-photo" hidden>
                            <p class="text-center mx-2 mt-2 filename">No file chosen</p>
                            <i class="bi bi-x-lg" id="x-button" style="display: none;" onclick="removeFile()"></i>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <style>
        #x-button:hover{
            cursor: pointer;
        }
    </style>

    <script src="/js/menfessreply.js"></script>
@endsection
