@extends('layout.main')

@section('title')
    <title>Hamily | {{ $title }}</title>
@endsection

@section('css')
        <link rel="stylesheet" href="/css/menfess.css">
@endsection

@section('contents')
    <div class="back container">
            <button type="button" class="btn"><i class ="fa fa-arrow-circle-left fa-xl" style="color: #78A2CC; marginleft:-1.5vw" aria-hidden="true"></i>
        </div>
    </a>
    <div class="container mt-4">
        <div class="container px-3 py-3 mx-3" style="background-color: #FFA5B8; display: flex; border-radius:10px; font-color: white;">
            <div class="col-10">
                <h3>Bagaimana cara mengubah hari Senin menjadi hari Minggu?</h3>
                <p>asked by</p>
                <h5>surya setiakawan</h5>
            </div>
            <div class="col-md-3 offset-md my-5">
                <div class="replies background-color: #78A2CC">
                    <button type="button" class="btn" style="background-color: #78A2CC;"><i class="fa fa-comments" aria-hidden="true"></i>
                    <i>add replies</i>
                    <div class="modal-dialog modal-xl">add replai</div>
                </div>
            </div>
        </div>
        <div class="card my-3" >
            <div class="card-body">
                <div class="row d-flex m-1">
                    <div class="col-1">
                        <img src="https://images.pexels.com/photos/771742/pexels-photo-771742.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Profile" style="border-radius: 50%; width: 50px; height:50px; object-fit: cover;">
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
                                <p style="color: #78A2CC">100 likes</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mx-1">
                    <img src="/img/articlepic.jpg" class="card-img-top" alt="..." style="height: 380px; object-fit:cover;">
                </div>
                <div class="row m-1">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
