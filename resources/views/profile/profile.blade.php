<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @stack('before-style')
    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    {{-- linke ke icon bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/home1.css">
    <link rel="stylesheet" href="/css/article.css">
    <link rel="stylesheet" href="/css/detailrating.css">
    <link rel="stylesheet" href="/css/profile.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link href="css/bootstrap.css" rel="stylesheet">   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    @stack('after-style')

</head>
<body>
    {{-- <nav class="navbar navbar-expand-lg navbar-dark navigasi">
        <div class="container">
          <a class="navbar-brand" href="/">PPTI Blog</a>
          <a href="#">
            <img src="/img/logo.png" alt="" width="200" class="navbar-brand mr-2">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
    </nav> --}}

    <nav class="navbar navbar-expand-lg navbar-dark navigasi">
        <div class="container">
          {{-- <a class="navbar-brand" href="/">PPTI Blog</a> --}}
          <a href="/">
            <img src="/img/logo.png" alt="" width="200" class="navbar-brand mr-2">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">      
      
            <ul class="navbar-nav ms-auto">
              {{-- jika sudah login --}}
              @auth
              {{-- @dd(Auth::user()->username) --}}
                <li class="nav-item dropdown d-flex flex-row align-items-center">
                  <img src="/img/profile.png" width="20" alt="" class="d-block" height="20">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     {{ Auth::user()->username }}
                    </a> 
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i>My Dashboard</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <form action="/logout" method="POST">
                      @csrf
                      <button type="submit" class="dropdown-item">
                        <i class="bi bi-box-arrow-right"></i>Logout
                      </button>
                    </form>
                  </ul>
                </li>
      
              {{-- jika belum login --}}
              @else
                
                  <li class="nav-item" style="display: flex; align-content : center;">
                    <a href="/login" class="nav-link ">
                        {{-- {{ $active == 'login' ? 'active' : '' }} --}}
                      <i class="bi bi-box-arrow-in-right" style="margin-right: 5px"></i>
                    Login</a>
                  </li>
                
              @endauth
      
            </ul>
          </div>
        </div>
      </nav>
      

    @if (session('message'))
        <!-- Modal -->
        <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="background-color: #78A2CC;border:none">
                    <div class="row modal-header" style="border: none">
                        <button type="button" class="btn-close col-12 d-flex justify-content-end" data-bs-dismiss="modal" aria-label="Close" style="border: none; color: #FFB8C7; outline:none">
                        </button>
                        <h5 class="modal-title col-12 text-center " id="successModalLabel" style="font-weight: bold; color:white; font-size:25px">Yeay!</h5>
                        <div class="col-12 text-center">
                            <img src="/img/check-update-sukses-profile.png" alt="" style="width: 100px; height:100px">
                        </div>
                        <h5 class="col-12 modal-title text-center" style="font-weight: bold; color:white; font-size:25px">{{ session('message') }}  </h5>
                    </div>
                    <div class="modal-footer" style="border-top: none;">

                    </div>
                </div>
            </div>
        </div>

        <!-- Skrip JavaScript untuk Menampilkan Modal -->
        <script>
            $(document).ready(function() {
                $('#successModal').modal('show');
            });
        </script>
    @endif


    <div class="container mt-5">
        <div class="row">
            <div class="col-3 bungkus-nav-profile py-3">
                <a href=""class="row mt-3 mb-3 bungkus-profile-kiri" style="text-decoration: none">
                    <div class="col-4">
                        <img src="/img/home-navbar-profile.png" class="pict-nav-profile">
                    </div>
                    <div class="col d-flex align-items-center text-home-profile" style="font-weight: bold; color:#78A2CC">
                        Home
                    </div>
                </a>
                <a href=""class="row mt-3 mb-3 bungkus-profile-kiri" style="text-decoration: none">
                    <div class="col-4">
                        <img src="/img/LoadingSign-profile.png" class="pict-nav-profile">
                    </div>
                    <div class="col d-flex align-items-center text-home-profile" style="font-weight: bold; color:#78A2CC">
                        Track
                    </div>
                </a>
                <a href=""class="row mt-3 mb-3 bungkus-profile-kiri" style="text-decoration: none">
                    <div class="col-4">
                        <img src="/img/book-profile-navbar.png" class="pict-nav-profile">
                    </div>
                    <div class="col d-flex align-items-center text-home-profile" style="font-weight: bold; color:#78A2CC">
                        Book
                    </div>
                </a>
                <a href=""class="row mt-3 mb-3 bungkus-profile-kiri" style="text-decoration: none">
                    <div class="col-4">
                        <img src="/img/article-navbar-profile.png" class="pict-nav-profile">
                    </div>
                    <div class="col d-flex align-items-center text-home-profile" style="font-weight: bold; color:#78A2CC">
                        Article
                    </div>
                </a>
                <a href=""class="row mt-3 mb-3 bungkus-profile-kiri" style="text-decoration: none">
                    <div class="col-4">
                        <img src="/img/Menfess-profile-navbar.png" class="pict-nav-profile">
                    </div>
                    <div class="col d-flex align-items-center text-home-profile" style="font-weight: bold; color:#78A2CC">
                        Menfess
                    </div>
                </a>
                <a href=""class="row mt-3 mb-3 bungkus-profile-kiri" style="text-decoration: none">
                    <div class="col-4">
                        <img src="/img/Rating-profile-navbar.png" class="pict-nav-profile">
                    </div>
                    <div class="col d-flex align-items-center text-home-profile" style="font-weight: bold; color:#78A2CC">
                        Rating
                    </div>
                </a>
                
            </div>
            <div class="col-1">

            </div>
            <div class="col">
                <div class="profile-box-navbar d-flex justify-content-center rounded-top pt-3">
                    Profile
                </div>
                <div class="row baris-profile-pict d-flex justify-content-center">
                    <img src="/img/ProfilePic-profile.png " alt="" class="profile-pict">
                </div>
                
                <form class="row g-3" action="{{ route('updateprofile') }}" method="POST">
                    @method("put")
                    @csrf
                    <div class="col-12">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="Tes" required >
                        @error('username')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-5">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control @error('firstname') is-invalid @enderror"  name="firstname">
                        @error('firstname')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-1">

                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname">
                        @error('lastname')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-5">
                        <label class="form-label">Date of Birth</label>
                        <div class="row g-0 form-control input-group date @error('dob') is-invalid @enderror" id="datepicker">
                            <input type="text" class="col-10 " style="border: none" name="dob">
                            <span class="input-group-append col-2  d-flex justify-content-center align-items-center">
                                <span class="button-calendar bg-white d-block col-12 d-flex justify-content-center align-items-center "> 
                                    <i class="fa fa-calendar"></i>
                                </span>
                            </span>
                        </div>
                        @error('dob')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
        
                    </div>
                    <div class="col-md-1">

                    </div>
                    <div class="col-md-6">
                        <label class="form-label ">NIK</label>
                        <input type="text" class="form-control @error('nik') is-invalid @enderror" name="nik" >
                        @error('nik')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email">
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12">
                      <label  class="form-label">Phone Number</label>
                      <input type="text" class="form-control @error('phonenumber') is-invalid @enderror" name="phonenumber">
                        @error('phonenumber')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <label class="form-label col-6">Biodata</label>
                            <label class="form-label col-6 d-flex justify-content-end ">/100</label>
                        </div>
                      
                        <textarea class="form-control @error('biodata') is-invalid @enderror" rows="3" name="biodata"></textarea>
                        @error('biodata')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12 d-flex justify-content-center ">
                      <button type="button" class="col-3 btn btn-update-profile pt-2 pb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">UPDATE</button>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            {{-- <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div> --}}
                            <div class="modal-body">
                            <div class="offset-2 col-8" style="text-align: justify">
                                <div class="book-sukses pt-3 pb-3 col-12 text-center">
                                Do you want to update your profile?
                                </div>
                                {{-- <p class="book-sukses-detail">
                                Jangan lupa datang ke RSUD Mangusada <span class="book-sukses-detail-span"> Kamis, 6 April 2023, Jam 09.00 - 12.00</span> 
                                Semoga konsultasinya berjalan lancar & memuaskan
                                </p> --}}
                                <div class="row">
                                    <button type="submit" class="col-5 yes-profile mt-3 mb-4 pt-3 pb-3">
                                        <div style="font-weight: bold">Yes</div>
                                    </button>
                                    <div class="col-2">

                                    </div>
                                    <button class="col-5 no-profile mt-3 mb-4" data-bs-dismiss="modal">
                                        <div class="no-profile" style="font-weight: bold"  >No</div>
                                    </button>
                                </div>
                                
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>

                  </form>
                
            </div>
        </div>

        
        
    </div>

    <label for=""></label>
    <input type="text" class="form-control">

    <script type="text/javascript">
        $(function() {
            $('#datepicker').datepicker({
                'format': 'yyyy-mm-dd',
                'autoclose': true
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
</body>
</html>