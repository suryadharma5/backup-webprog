@extends('layout.main')

@section('title')
<title>Hamily | {{ $title }}</title>
@endsection

@section('css')
        <link rel="stylesheet" href="/css/menfess.css">
@endsection



@section('contents')

<div class="container">
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
    <div class="card my-3" >
        <div class="card-body">
            <div class="row d-flex mx-1">
                <div class="col-10 my-1">
                    <h3 class="card-title fw-bold">ini judul</h3>
                </div>
                <div class="col my-1">
                    <div class="row d-flex">
                        <div class="col-1">
                            <i class="fa-solid fa-heart fa-lg" style="color: #78a2cc;"></i>
                        </div>
                        <div class="col">
                            <p style="color: #78A2CC">100 likes</p>
                        </div>
                    </div>
                </div>
                <div class="col my-1" style="margin-left: -25px;">
                    <div class="row d-flex">
                        <div class="col-1">
                            <i class="fa-solid fa-message" style="color: #78a2cc;"></i>
                        </div>
                        <div class="col">
                            <p style="color: #78A2CC">5 replies</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex mx-1">
                <div class="col-1">
                    <p class="card-text" style="color: gray">asked by</p>
                </div>
                <div class="col" style="margin-left: -38px">
                    <p class="card-text" style="font-weight: bold;">suryadharma</p>
                </div>
            </div>
            <div class="row d-flex m-1">
                <div class="col-1">
                    <img src="https://images.pexels.com/photos/771742/pexels-photo-771742.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Profile" style="border-radius: 50%; width: 50px; height:50px; object-fit: cover;">
                </div>
                <div class="col" style="margin-left: -30px">
                    <p style="font-weight: bold;">Brian</p>
                    <p style="margin-top: -20px; color: gray;">Worker Dad</p>
                </div>
            </div>
            <div class="row mx-1">
                <img src="/img/articlepic.jpg" class="card-img-top" alt="..." style="height: 380px; object-fit:cover;">
            </div>
            <div class="row m-1">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="row text-center" style="margin-left: 30%; margin-right:30%;">
                <div class="tombol">
                    <a href="#" class="btn" style="background-color: #78A2CC; color:#FFF7F6;">See more replies  <i class="fa-solid fa-arrow-right fa-lg mx-2" style="color: #ffffff;"></i></a>
                </div>
            </div>
        </div>
    </div>


</div>



@endsection

