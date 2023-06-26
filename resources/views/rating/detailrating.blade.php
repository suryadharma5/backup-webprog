@extends('layout.main')

@section('title')
    <title>Hamily | {{ $title }}</title>
@endsection

@section('contents')
<div style="background-color: #FFF7F6">
    <div class="container py-5" >
        <div class="row g-0">
            <div class="col-2">
                <img src="/img/back-detailrating.png" alt="">
            </div>
            <div class="col-4">
                <img src="/img/product-detailrating.png" alt="">
                <button class="btn btn-primary"> Add Product</button>
            </div>
            <div class="col pt-5">
                <div class="pt-5 title-product">
                    Johnson Baby
                </div>
                <div class="desc-product">
                    Baby Bath Blue 200ml
                </div>
                <div class="row mt-5 box-rate pb-5">
                    <div class="col-6 d-flex align-items-center justify-content-center flex-column pt-4">
                        <div class="rate">
                            4.9
                        </div>
                        <div class="star">
                            <img src="/img/star-detailrating.png" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="progress-title">
                            Rating Distribution
                        </div>
                        <div class="row">
                            <div class="col-9 mt-2"> 
                                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: 25%"></div>
                                </div>
                                <div class="progress mt-2" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: 90%"></div>
                                </div>
                                <div class="progress mt-2" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: 70%"></div>
                                </div>
                                <div class="progress mt-2" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: 40%"></div>
                                </div>
                                <div class="progress mt-2" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: 25%"></div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="rate-dist">
                                    5
                                </div>
                                <div class="rate-dist">
                                    4
                                </div>
                                <div class="rate-dist">
                                    3
                                </div>
                                <div class="rate-dist">
                                    2
                                </div>
                                <div class="rate-dist">
                                    1
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="row mt-5 box-rate pb-3">
                    <div class="col-3 d-flex justify-content-center">
                        <img src="/img/user-detailrating.png" alt="">
                    </div>
                    <div class="col-3 mt-3">
                        <div class="user-text">
                            25 <span class="user-text-span"> users </span>
                        </div>
                        <div class="reviewed-this">
                            Reviewed this
                        </div>
                    </div>
                    <div class="col-2">
                        <img src="/img/thumb-detailrating.png" alt="">
                    </div>
                    <div class="col-4 mt-3">
                        <div class="user-text">
                            25 <span class="user-text-span"> users </span>
                        </div>
                        <div class="reviewed-this">
                            Recommended this
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
    
    <div class="sectionpic awanbiru">
        <img src="img/awan.png" alt="">
    </div>

    <div class="container-fluid biru-bawah">
        <div class="container ">
            <div class="container">
                <div class="row pt-3">
                    <div class="col-3"></div>
                    <div class="col-6 d-flex justify-content-center fs-2 border-bottom border-3 mb-5" style="font-weight: bold; color:#FFF7F6">USER REVIEWS</div>
                    <div class="col-3"></div>
                </div>

                <div class="row box-komen-detailrating py-5">
                    <div class="col-1 text-center">
                        <img src="/img/section 3_profile-picture.png" alt="..." class="rounded-circle">
                    </div>
                    <div class="col-6">
                        <div style="font-weight: bold">NURHAYATI</div>
                        <img src="/img/star-detailrating.png" alt="">
                        <div class="recommend-detailrating py-1">
                            <img src="/img/section4_jempol-rekomen.png" alt="">
                            <div style="color: #5EC75C; margin-left:10px" class="">NURHAYATI recommends this product</div>
                        </div>
                        <div>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur semper facilisis mollis. 
                            Nam vel rhoncus dolor, at accumsan est. Fusce varius dolor sit amet pulvinar vestibulum. Curabitur accumsan in purus vitae vulputate.
                            Pellentesque facilisis congue mauris, sed semper ex vehicula a. Maecenas in tempor massa, ac laoreet ante. Donec nec.
                        </div>
                        <div style="font-weight: bold" class="mt-3">
                            Do you find this review helpful?<span>
                                <a href="" style="text-decoration: none;color: #FFB8C7" class="yesno-detailrating">Yes</a>
                                |
                                <a href="" style="text-decoration: none;color: #FFB8C7" class="yesno-detailrating">No</a>
                            </span>
                        </div>
                        <div>
                            3 people have found this review helpful
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="row mb-3">
                            <div class="col"></div>
                            <div class="col-4 text-center" style="">4 days ago</div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center" style=""><img src="/img/gb-artikel-tab.png" alt="" class="gb-komen-detailrating"></div>
                        </div>
                    </div>
                    
        
                </div>

                <div class="row box-komen-detailrating py-5 mt-5">
                    <div class="col-1 text-center">
                        <img src="/img/section 3_profile-picture.png" alt="..." class="rounded-circle">
                    </div>
                    <div class="col-6">
                        <div style="font-weight: bold">NURHAYATI</div>
                        <img src="/img/star-detailrating.png" alt="">
                        <div class="recommend-detailrating nonrekomen py-1">
                            <img src="/img/section4_jempol-nonrekomen.png" alt="">
                            <div style="color: #C75C5C; margin-left:10px" class="">NURHAYATI not recommends this product</div>
                        </div>
                        <div>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur semper facilisis mollis. 
                            Nam vel rhoncus dolor, at accumsan est. Fusce varius dolor sit amet pulvinar vestibulum. Curabitur accumsan in purus vitae vulputate.
                            Pellentesque facilisis congue mauris, sed semper ex vehicula a. Maecenas in tempor massa, ac laoreet ante. Donec nec.
                        </div>
                        <div style="font-weight: bold" class="mt-3">
                            Do you find this review helpful?<span>
                                <a href="" style="text-decoration: none;color: #FFB8C7" class="yesno-detailrating">Yes</a>
                                |
                                <a href="" style="text-decoration: none;color: #FFB8C7" class="yesno-detailrating">No</a>
                            </span>
                        </div>
                        <div>
                            3 people have found this review helpful
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="row mb-3">
                            <div class="col"></div>
                            <div class="col-4 text-center" style="">4 days ago</div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center" style=""><img src="/img/gb-artikel-tab.png" alt="" class="gb-komen-detailrating"></div>
                        </div>
                    </div>
                </div>
                
                <div class="row box-komen-detailrating py-5 mt-5">
                    <div class="row">
                        <div class="col-1 text-center">
                            <img src="/img/section 3_profile-picture.png" alt="..." class="rounded-circle">
                        </div>
                        <div class="col-6">
                            <div style="font-weight: bold">NURHAYATI</div>
                            <img src="/img/star-detailrating.png" alt="">
                            <div class="recommend-detailrating py-1">
                                <img src="/img/section4_jempol-rekomen.png" alt="">
                                <div style="color: #5EC75C; margin-left:10px" class="">NURHAYATI recommends this product</div>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="row mb-3">
                                <div class="col"></div>
                                <div class="col-4 text-center" style="">4 days ago</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-10">
                            <div>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur semper facilisis mollis. 
                                Nam vel rhoncus dolor, at accumsan est. Fusce varius dolor sit amet pulvinar vestibulum. Curabitur accumsan in purus vitae vulputate.
                                Pellentesque facilisis congue mauris, sed semper ex vehicula a. Maecenas in tempor massa, ac laoreet ante. Donec nec.
                            </div>
                            <div style="font-weight: bold" class="mt-3">
                                Do you find this review helpful?<span>
                                    <a href="" style="text-decoration: none;color: #FFB8C7" class="yesno-detailrating">Yes</a>
                                    |
                                    <a href="" style="text-decoration: none;color: #FFB8C7" class="yesno-detailrating">No</a>
                                </span>
                            </div>
                            <div>
                                3 people have found this review helpful
                            </div>
                        </div>
                        <div class="col-1"></div>
                    </div>
        
                </div>
            </div>
        </div>
    </div>
    

@endsection

