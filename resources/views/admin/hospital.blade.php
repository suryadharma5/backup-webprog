@extends('admin.main')

@section('contents')

    {{-- Add Modal --}}
    <div class="modal fade" id="addModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Add Doctor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="{{ route('addHospital') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="province">Province</label>
                            <select class="form-select daerah" aria-label="Default select example" id="provinsi" name="idProvinsi">
                                <option selected>Pilih Provinsi</option>
                                @foreach ($provinces as $province)
                                    <option value="{{ $province->id }}">{{ $province->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <label class="input-group-text" for="regency">Regency</label>
                            <select class="form-select daerah" aria-label="Default select example" id="kabupaten" name="idKabupaten">
                                <option selected>Pilih Kabupaten</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Hospital Name</label>
                            <input type="text" name="hospitalName" class="form-control" >
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Edit Modal --}}
    @foreach ($hospitals as $hospital)
    <div class="modal fade" id="editModal-{{ $hospital->id }}" tabindex="-1" aria-hidden="true" aria-labelledby="editModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                
                <form action="{{ route('adminHospital', $hospital->id) }}" method="POST">
                    @method("put")
                    @csrf
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="province">Province</label>
                            <select class="form-select daerah" aria-label="Default select example" id="provinsi2" name="idProvinsi">
                                <option selected>Pilih Provinsi</option>
                                @foreach ($provinces as $province)
                                    <option value="{{ $province->id }}">{{ $province->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <label class="input-group-text" for="regency">Regency</label>
                            <select class="form-select daerah" aria-label="Default select example" id="kabupaten2" name="idKabupaten">
                                <option selected>Pilih Kabupaten</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Hospital Name</label>
                            <input type="text" name="hospitalName" class="form-control" value="{{ $hospital->hospital_name }}">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach
    

    {{-- Delete Modal --}}
    @foreach ($hospitals as $hospital)
    <div class="modal fade" id="deleteModal-{{ $hospital->id }}" tabindex="-1"  aria-hidden="true" aria-labelledby="deleteModalLabel">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              {{-- <h5 class="modal-title">Modal title</h5> --}}
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <h3>Are you sure to delete this hospital from database?</h3>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <form action="{{ route('delete-hospital', $hospital->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-primary">Yes</button>
              </form>
            </div>
          </div>
        </div>
    </div>
    @endforeach

    <div class="container my-3">
        {{-- title --}}
        <div class="row">
            <div class="col-4" style="color: #78A2CC;">
                <h1>Hospital</h1>
            </div>
        </div>
        <hr style="margin-top:0px; margin-bottom:0px">


        {{-- Hospitals --}}
        <div class="row mt-1">
            <div class="col-4" >
                <h3 class="text-secondary">List of Hospitals</h3>
            </div>
            <div class="col addBtn">
                <a href="#" class="text-decoration-none text-white float-end mt-2 rounded-0"  style="background-color: #78A2CC;">
                    <button type="button" class="btn text-white">
                        <i class="fa-solid fa-plus fa-md"></i>&nbsp;Add hospital
                    </button>
                </a>
            </div>
        </div>

        @if (session('message'))

          <div class="alert alert-success row mt-2" role="alert">
            <div class="col-6">
                {{ session('message') }} 
            </div>
            <div class="col-4"></div>
            <div class="col-2 d-flex justify-content-end">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          </div>
       
        @endif

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Hospital Name</th>
                <th scope="col">Province</th>
                <th scope="col">Regency</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($hospitals as $hospital)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $hospital->hospital_name }}</td>
                <td>{{ $hospital->province->name }}</td>
                <td style="text-transform: capitalize">{{ $hospital->regency->name }}</td>
                <td>
                    <a href="#" data-bs-toggle='modal' data-bs-target="#editModal-{{ $hospital->id }}" style="text-decoration: none">
                        <button type="button" class="btn btn-success editBtn mb-2">
                            <i class="fa-solid fa-pen-to-square fa-sm editBtn"></i>&nbsp;Edit
                        </button>
                    </a>
                    
                    <button type="button" class="btn btn-danger deleteBtn" data-bs-toggle='modal' data-bs-target="#deleteModal-{{ $hospital->id }}">
                        <i class="fa-solid fa-trash fa-sm"></i>&nbsp;Delete
                    </button>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>

        {{-- paginator
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
        </nav> --}}
        <div class="row d-flex justify-content-end">{{ $hospitals->links() }}</div>
        
    </div>


@endsection

@section('scripts')

    <script>
        // $(document).ready(function(){

        //     $(document).on('click', '.editBtn', function(){
        //         // var article_id = $(this).val();
        //         $('#editModal').modal('show');
        //     });
        // })

        $(document).ready(function(){

            $(document).on('click', '.addBtn', function(){
                // var article_id = $(this).val();
                $('#addModal').modal('show');
            });
        })

        // $(document).ready(function(){

        //     $(document).on('click', '.deleteBtn', function(){
        //         // var article_id = $(this).val();
        //         $('#deleteModal').modal('show');
        //     });
        // })
    </script>

@endsection
