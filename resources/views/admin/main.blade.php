<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hamily | Admin</title>
    <link rel="stylesheet" href="/css/admin.css">
    <link rel="icon" href="/img/tabs.png">
</head>
<body>
    {{-- Side Navbar --}}
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-4 col-lg-3 min-vh-100 d-flex flex-column justify-content-between" style="background-color: #78A2CC">
                @include('admin.navbar')
            </div>
            <div class="col">
                @yield('contents')
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/720cee72b2.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"> --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>



@yield('scripts')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="/js/ajax.js"></script>
<script src="/js/ajax2.js"></script>
<script src="/js/index.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</body>
</html>


