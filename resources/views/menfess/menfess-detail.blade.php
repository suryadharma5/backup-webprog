@extends('layout.main')

@section('title')
    <title>Hamily | {{ $title }}</title>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/menfess.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
@endsection

{{-- @dd($menfess) --}}

@section('contents')
    <div class="container mt-4">
        <div class="col-2">
            <a href="/menfess">
                <img src="/img/back-detailrating.png" alt="">
            </a>
        </div>
        <div class="container px-3 pt-4 text-white mt-4" style="background-color: #FFA5B8; display: flex; border-radius:10px; font-color: white;">
            <div class="col-10">
                <h4 class="fw-bold">{{ $menfess->title }}</h4>
                <p>asked by <span class="fw-bold">{{ $menfess->user->username }}</span></p>
            </div>
            <div class="col-md-3 offset-md my-2 p-0">
                <div class="replies text-white fw-bold">
                    <button type="button" class="btn text-white fw-bold" style="background-color: #78A2CC;" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-pencil-square"></i>
                    Add reply </button>
                    {{-- <div class="modal-dialog modal-xl">add replai</div> --}}
                </div>
            </div>
        </div>

        {{-- main content user reply --}}
        @foreach ($menfess->menfessReply as $men)
            {{-- @dd($men->users) --}}
            <div class="card-body border-0 mt-4">
                    <div class="card my-3" style="background-color: #FFF7F6">
                    <div class="row d-flex m-1 mt-3">
                        <div class="col-1">
                            <img src="https://images.pexels.com/photos/771742/pexels-photo-771742.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" style="border-radius: 50%; width: 50px; height:50px; object-fit: cover;">
                        </div>
                        <div class="col-8" style="margin-left: -30px">
                            <p style="font-weight: bold;">{{ $men->users->username }}</p>
                            <p style="margin-top: -20px; color: gray;">Worker Dad</p>
                        </div>
                        <div class="col">
                            <div class="col-lg py-2">
                                <div class="d-flex flex-row justify-content-end align-items-center">
                                    <i class="fa-solid fa-heart fa-lg" style="color: #78a2cc;"></i>
                                    <div class="align-self-center p-0 ms-1">{{ $men->total_likes }} likes</div>
                                    <div class="dropdown-center ms-4">
                                        <i class="bi bi-three-dots-vertical titik-tiga" data-bs-toggle="dropdown" style=""></i>
                                        <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#"><i class="bi bi-exclamation-circle me-2"></i>Laporkan</a></li>
                                          @if ($men->users->id == auth()->user()->id)
                                          <li><hr class="dropdown-divider"></li>
                                            <form action="/menfess/detail/reply/{{ $men->id}}" method="POST">
                                                <li onclick="return confirm('Apaka anda yakin ?')">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Hapus</button> 
                                                </li>
                                            </form>
                                          @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col my-1 bg-r">
                            <div class="row d-flex">
                                <div class="col-1">
                                    <i class="fa-solid fa-heart fa-lg" style="color: #78a2cc;"></i>
                                </div>
                                <div class="col">
                                    <p style="color: #78A2CC">{{ $menfess->total_likes }} likes</p>
                                </div>
                                <div class="col bg-warning">
                                    a
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    @if ($men->reply_image)
                        <div class="row mx-1">
                            <img src="{{ $men->reply_image }}" class="card-img-top" alt="..." style="height: 380px; object-fit:cover;">
                        </div>
                    @endif
                    <div class="row m-1 mt-3">
                        <p>{{ $men->reply_text }}</p>
                    </div>
                </div>
            </div>
        @endforeach

        {{-- Modal --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="width: 700px; height: 600px;">
            <form action="/menfess/detail/reply" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{ $menfess->id }}" name="menfess_id">
                <div class="modal-content" style="height: 500px;">
                    <div class="x-button d-flex flex-row-reverse mt-4" style="margin-right: -50px">
                        <button type="button" class="border-0 bg-transparent" data-bs-dismiss="modal"><i class="bi bi-x-lg" style="color: #FFA5B8; -webkit-text-stroke: 3px;"></i></button>
                    </div>
                    <div class="body p-0">
                        <div class="col-lg px-4">
                            <p class="my-0">
                                add reply to
                            </p>
                            <h5 class="fw-bold">{{ Str::limit($menfess->title, $limit=150, '...') }}</h5>
                            <div class="mb-3">
                                <textarea class="form-control @error('user_reply') is-invalid @enderror" id="exampleFormControlTextarea1" rows="9" placeholder="Type reply..." style="background-color: #C3E4F1" name="reply_text"></textarea>
                                @error('user_reply')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                <script type="text/javascript">
                                    console.log('error');
                                    $(document).ready(function(){
                                        //your stuff
                                        $('#exampleModal').modal('show');
                                    });
                                </script>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="image-input d-flex flex-row col-lg-6 align-items-center">
                                    <button type="button" id="photoButton" onclick="buttonClick()" class="border-0 bg-transparent" style="text-align: left; width:7%">
                                        <i class="bi bi-image-fill fa-2x" style="color: #FFA5B8"></i>
                                    </button>
                                    <input type="file" name="reply_image" id="reply-photo" hidden>
                                    <p class="text-center ms-4 mt-2 filename">No file chosen</p>
                                    <i class="bi bi-x-lg" id="x-button" style="display: none;" onclick="removeFile()"></i>
                                </div>
                                <div class="d-flex flex-row col-lg-6 justify-content-end">
                                    <button type="submit" style="background-color: #FFA5B8; width: 50%; height: 80%;" class="btn text-white fw-bold p-0">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
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
