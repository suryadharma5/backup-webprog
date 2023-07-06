@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="/css/menfess.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
@endsection

@section('title')
<title>Hamily | {{ $title }}</title>
@endsection

@section('contents')

<div class="container">
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show col-lg-12 mt-3" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    {{-- button bagian atas --}}
    <div class="row pt-5 d-flex">
        <div class="col-2">
            <a href="#">
                <div class="tombol">
                    <button type="button" class="btn" style="background-color: #FFB8C7; font-weight: bold; margin-right: 25px; color:#FFF7F6"><i class="fa-solid fa-cloud-arrow-up fa-xl"></i>post menfess</button>
                </div>
            </a>
        </div>
        <div class="col-2">
            <a href="#">
                <div class="tombol">
                    <button type="button" class="btn" style="background-color: #78A2CC; font-weight: bold; color:#FFF7F6"><i class="fa-solid fa-clock-rotate-left fa-xl"></i>my menfess</button>
                </div>
            </a>
        </div>
        <div class="col-8">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <div class="tombol">
                        <button class="btn" type="button" style="background-color: #FFB8C7; color:#FFF7F6;"><i class="fa-sharp fa-solid fa-magnifying-glass fa-xl"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- card untuk menfess --}}
    @foreach ($menfess as $men)
    <div class="card my-3" >
        <div class="card-body">
            <div class="row d-flex mx-1">
                <div class="col-10 my-1">
                    <a href="/menfess/detail/{{ $men->id }}" class="text-decoration-none text-black">
                        <h3 class="card-title fw-bold">{{ $men->title }}</h3>
                    </a>
                </div>
                <div class="col my-1">
                    <div class="row d-flex">
                        <div class="col-1">
                            <i class="fa-solid fa-heart fa-lg" style="color: #78a2cc;"></i>
                        </div>
                        <div class="col">
                            <p style="color: #78A2CC">{{ $men->total_likes }} likes</p>
                        </div>
                    </div>
                </div>
                <div class="col my-1" style="margin-left: -25px;">
                    <div class="row d-flex">
                        <div class="col-1">
                            <i class="fa-solid fa-message" style="color: #78a2cc;"></i>
                        </div>
                        <div class="col">
                            <p style="color: #78A2CC">{{ $men->total_replies }} replies</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex mx-1 my-0">
                <div class="col-1">
                    <p class="card-text" style="color: gray">asked by</p>
                </div>
                <div class="col" style="margin-left: -38px">
                    <p class="card-text" style="font-weight: bold;">{{ $men->user->username }}</p>
                </div>
            </div>
            <hr>
            @if ($men->menfessReply->count())
            
                <div class="row d-flex m-1">
                    <div class="col-1">
                        <img src="https://images.pexels.com/photos/771742/pexels-photo-771742.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Profile" style="border-radius: 50%; width: 50px; height:50px; object-fit: cover;">
                    </div>
                    <div class="col" style="margin-left: -30px">
                        <p style="font-weight: bold;">{{ $men->menfessReply[0]->users->username }}</p>
                        <p style="margin-top: -20px; color: gray;">Worker Dad</p>
                    </div>
                    <div class="col text-end">
                        <div class="dropdown-center">
                            <i class="bi bi-three-dots-vertical titik-tiga" data-bs-toggle="dropdown" style=""></i>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#"><i class="bi bi-exclamation-circle me-2"></i>Laporkan</a></li>
                              @if ($men->menfessReply[0]->users->id == auth()->user()->id)
                              <li><hr class="dropdown-divider"></li>
                                <form action="/menfess/detail/reply/{{ $men->menfessReply[0]->id}}" method="POST">
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

                    @if ($men->menfessReply[0]->reply_image)
                        <div class="row mx-1">
                            <img src="{{$men->menfessReply[0]->reply_image}}" class="card-img-top" alt="..." style="height: 380px; object-fit:cover;">
                        </div>
                    @endif
                    <div class="row m-1">
                        <p>{{$men->menfessReply[0]->reply_text}}</p>
                    </div>
                    <div class="row text-center" style="margin-left: 30%; margin-right:30%;">
                    <div class="tombol">
                        <a href="/menfess/detail/{{ $men->id }}" class="btn" style="background-color: #78A2CC; color:#FFF7F6;">See all replies  <i class="fa-solid fa-arrow-right fa-lg mx-2" style="color: #ffffff;"></i></a>
                    </div>
                </div>
            @endif
        </div>
    </div>
    @endforeach
</div>



@endsection

