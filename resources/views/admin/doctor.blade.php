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

                <form action="{{ route('addDoctor') }}" method="POST">
                    @csrf
                    <div class="modal-body">

                        <div class="form-group mb-3">
                            <label for="">Name</label>
                            <input type="text" name="doctorName" required class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Biodata</label>
                            <textarea class="form-control" name="biodata" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Year of experience</label>
                            <input type="number" name="yearExperience" required class="form-control">
                        </div>
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

                        <div class="input-group mb-3">
                            <label class="input-group-text" for="hospital">Hospital</label>
                            <select class="form-select daerah" aria-label="Default select example" id="hospital" name="idHospital">
                                <option selected>Pilih Rumah Sakit</option>
                            </select>
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
    @foreach ($doctors as $doctor)
    <div class="modal fade" id="editModal-{{ $doctor->id }}" tabindex="-1" aria-hidden="true" aria-labelledby="editModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="{{ route('updateDoctor', $doctor->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="modal-body">

                        <div class="form-group mb-3">
                            <label for="">Name</label>
                            <input type="text" name="doctorName" required class="form-control" value="{{ $doctor->doctor_name }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Biodata</label>
                            <textarea class="form-control" name="biodata" id="" cols="30" rows="10">{{ $doctor->doctor_profile }}</textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Year of experience</label>
                            <input type="number" name="yearExperience" required class="form-control" value="{{ $doctor->year_experience }}">
                        </div>
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

                        <div class="input-group mb-3">
                            <label class="input-group-text" for="hospital">Hospital</label>
                            <select class="form-select daerah" aria-label="Default select example" id="hospital2" name="idHospital">
                                <option selected>Pilih Rumah Sakit</option>
                            </select>
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
    @foreach ($doctors as $doctor)
    <div class="modal fade" id="deleteModal-{{ $doctor->id }}" tabindex="-1" aria-hidden="true" aria-labelledby="deleteModalLabel">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              {{-- <h5 class="modal-title">Modal title</h5> --}}
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <h3>Are you sure to delete this doctor profile?</h3>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <form action="{{ route('delete-doctor', $doctor->id) }}" method="POST">
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
                <h1>Doctor</h1>
            </div>
        </div>
        <hr style="margin-top:0px; margin-bottom:0px">


        {{-- Doctors --}}
        <div class="row mt-1">
            <div class="col-4" >
                <h3 class="text-secondary">List of Doctors</h3>
            </div>
            <div class="col addBtn">
                <a href="#" class="text-decoration-none text-white float-end mt-2 rounded-0"  style="background-color: #78A2CC;">
                    <button type="button" class="btn text-white">
                        <i class="fa-solid fa-plus fa-md"></i>&nbsp;Add doctor
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
                <th scope="col">Name</th>
                <th scope="col">Hospital</th>
                <th scope="col">Year of Experience</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($doctors as $doctor)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $doctor->doctor_name }}</td>
                    <td class="col-3">{{ $doctor->rumahSakit->hospital_name }}</td>
                    <td class="text-center">{{ $doctor->year_experience }}</td>
                    <td>
                        {{-- <a href="#" class="text-decoration-none text-white"> --}}
                            <button type="button" class="btn btn-success editBtn" data-bs-toggle='modal' data-bs-target="#editModal-{{ $doctor->id }}">
                                <i class="fa-solid fa-pen-to-square fa-sm editBtn"></i>&nbsp;Edit
                            </button>
                        {{-- </a> --}}
                        {{-- <a href="#" class="text-decoration-none text-white"> --}}
                            <button type="button" class="btn btn-danger deleteBtn" data-bs-toggle='modal' data-bs-target="#deleteModal-{{ $doctor->id }}">
                                <i class="fa-solid fa-trash fa-sm"></i>&nbsp;Delete
                            </button>
                        {{-- </a> --}}
                    </td>
                </tr>
            @endforeach
            
            </tbody>
        </table>
        <div class="row d-flex justify-content-end">{{ $doctors->links() }}</div>
    </div>


@endsection

@section('scripts')

    <script>
        $(document).ready(function(){

            $(document).on('click', '.editBtn', function(){
                // var article_id = $(this).val();
                $('#editModal').modal('show');
            });
        })

        $(document).ready(function(){

            $(document).on('click', '.addBtn', function(){
                // var article_id = $(this).val();
                $('#addModal').modal('show');
            });
        })

        $(document).ready(function(){

            $(document).on('click', '.deleteBtn', function(){
                // var article_id = $(this).val();
                $('#deleteModal').modal('show');
            });
        })
    </script>

@endsection
