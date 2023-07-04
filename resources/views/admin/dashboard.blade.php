@extends('admin.main')

@section('contents')

<div class="container my-3">
    {{-- title --}}
    <div class="row">
        <div class="col-4" style="color: #78A2CC;">
            <h1>Dashboard</h1>
        </div>
    </div>
    <hr style="margin-top:0px; margin-bottom:0px">

    {{-- subtitle --}}
    <div class="row mt-1">
        <div class="col-4" >
            <h3 class="text-secondary">Summary</h3>
        </div>
    </div>
    {{-- card --}}
    <div class="row d-flex mt-2 mx-1 justify-content-between">
        <div class="card mb-3 text-bg-dark" style="max-width: 21rem;">
            <div class="card-header">Users</div>
            <div class="card-body">
                <h1>900 users</h1>
                <p class="card-text">Have signed up to be our member, that's cool!</p>
            </div>
        </div>
        <div class="card mb-3" style="max-width: 21rem; background-color: #FFB8C7; color:white;">
            <div class="card-header">Booking doctor</div>
            <div class="card-body">
                   <h1>90 users</h1>
                <p class="card-text">Have booked our doctors, let's recruite more doctors.</p>
            </div>
        </div>
        <div class="card mb-3" style="max-width: 21rem; background-color: #78A2CC; color:white;">
            <div class="card-header">Article</div>
            <div class="card-body">
                <h1>90 users</h1>
                <p class="card-text">Have seen our article, keep up the good work.</p>
            </div>
        </div>
    </div>

    {{-- subtitle --}}
    <div class="row mt-1">
        <div class="col-4" >
            <h3 class="text-secondary">List of Users</h3>
        </div>
    </div>
    {{-- table --}}
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Name</th>
            <th scope="col">Date of Birth</th>
            <th scope="col">Phone Number</th>
            {{-- <th scope="col">Action</th> --}}
        </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td>Belum ada di database</td>
                <td>{{ $user->dob }}</td>
                <td>{{ $user->phone_number }}</td>
                {{-- <td> --}}
                    {{-- <a href="#" class="text-decoration-none text-white"> --}}
                        {{-- <button type="button" class="btn btn-danger deleteBtn">
                            <i class="fa-solid fa-trash fa-sm"></i>&nbsp;Delete
                        </button> --}}
                    {{-- </a> --}}
                {{-- </td> --}}
        </tr>
        @endforeach

        {{-- <tr>
            <th scope="row">2</th>
            <td>@mahmudcantik</td>
            <td>mahmudcantik@gmail.com</td>
            <td>Mahmud Aulia</td>
            <td>1979-08-19</td>
            <td>081234343434</td>
            <td>
                    <button type="button" class="btn btn-danger deleteBtn">
                        <i class="fa-solid fa-trash fa-sm"></i>&nbsp;Delete
                    </button>
            </td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>@mahmudcantik</td>
            <td>mahmudcantik@gmail.com</td>
            <td>Mahmud Aulia</td>
            <td>1979-08-19</td>
            <td>081234343434</td>
            <td>
                    <button type="button" class="btn btn-danger deleteBtn">
                        <i class="fa-solid fa-trash fa-sm"></i>&nbsp;Delete
                    </button>
            </td>
        </tr> --}}
        </tbody>
    </table>

    {{-- paginator --}}
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
    </nav>

</div>


@endsection
