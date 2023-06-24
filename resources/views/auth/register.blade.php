{{-- @extends('layouts.app') --}}
@extends('layout.main')

@push('after-style')
    <style>
        body {
            background-color: #A4CFFF;
        }
        .navigasi {
            display: none
        }
    </style>
@endpush

@section('css')
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/navbar.css">
@endsection

@section('title')
  <title>Hamily | {{ $title }}</title>
@endsection


@if (session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
@endif

@section('contents')
  <div class="row justify-content-center mt-5" style="width: 100%">
    <div class="col-md-4">
      {{-- didapat dari RegisterController yang mengirim flash message --}}
      @if (session()->has('success'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      <main class="form-signin">
          <div class="d-flex justify-content-center">
            <img class="mb-4" src="/img/logo.png" alt="" width="300" height="100">
          </div>

          <div class="container loginCont col-lg-12">
            <form method="POST" action="{{ route('register') }}" class="py-5 px-3">
                @csrf

                <div class="form-floating">
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror forms" id="username" placeholder="Your Username" autofocus required value="{{ old('username') }}">
                    <label for="username" style="color: #7F7476">Username</label>

                    @error('username')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>                      
                    @enderror
                  </div>
    
                <div class="form-floating">
                  <input type="email" name="email" class="form-control @error('email') is-invalid @enderror forms mt-3" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                  <label for="email" style="color: #7F7476">Email</label>
    
                  @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
    
                </div>
                <div class="form-floating">
                  <input type="password"  name="password" class="form-control @error('password') is-invalid @enderror mt-3 forms" id="password" placeholder="Password" required>
                  <label for="password" style="color:#7F7476">Password</label>

                  @error('password')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <div class="form-floating">
                    <input type="password" name="password_confirmation" class="form-control mt-3 forms" id="password-confirm" placeholder="Confirm Password" required>
                    <label for="password-confirm" style="color:#7F7476">Confirm Password</label>
  
                </div>
            
                <div class="d-flex justify-content-center">
                    <button class="w-50 btn btn-lg btn-danger mt-3 loginButton text-dark fs-6 fw-bold" type="submit">Sign Up</button>
                </div>

              </form>
          </div>
          <small class="d-block text-center mt-3">
           Already Have Account ? <a href="/login">Log In</a>
          </small>
      </main>
    </div>
  </div>
    
@endsection
