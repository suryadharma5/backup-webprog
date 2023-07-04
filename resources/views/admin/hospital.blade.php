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

                <form action="">
                    <div class="modal-body">

                        <div class="input-group mb-3">
                            <label class="input-group-text" for="province">Province</label>
                            <select class="form-select" id="province">
                              <option selected>Choose...</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <label class="input-group-text" for="regency">Regency</label>
                            <select class="form-select" id="regency">
                              <option selected>Choose...</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Hospital Name</label>
                            <input type="text" name="hospital" required class="form-control">
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
    <div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="">
                    <div class="modal-body">

                        <div class="input-group mb-3">
                            <label class="input-group-text" for="province">Province</label>
                            <select class="form-select" id="province">
                              <option selected>Choose...</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <label class="input-group-text" for="regency">Regency</label>
                            <select class="form-select" id="regency">
                              <option selected>Choose...</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Hospital Name</label>
                            <input type="text" name="hospital" required class="form-control">
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

    {{-- Delete Modal --}}
    <div class="modal fade" id="deleteModal" tabindex="-1">
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
              <button type="button" class="btn btn-primary">Yes</button>
            </div>
          </div>
        </div>
    </div>

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
            <tr>
                <th scope="row">1</th>
                <td>Eka Hospital</td>
                <td>Banten</td>
                <td>Serpong</td>
                <td>
                    <button type="button" class="btn btn-success editBtn">
                        <i class="fa-solid fa-pen-to-square fa-sm editBtn"></i>&nbsp;Edit
                    </button>
                    <button type="button" class="btn btn-danger deleteBtn">
                        <i class="fa-solid fa-trash fa-sm"></i>&nbsp;Delete
                    </button>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Eka Hospital</td>
                <td>Banten</td>
                <td>Serpong</td>
                <td>
                    <button type="button" class="btn btn-success editBtn">
                        <i class="fa-solid fa-pen-to-square fa-sm editBtn"></i>&nbsp;Edit
                    </button>
                    <button type="button" class="btn btn-danger deleteBtn">
                        <i class="fa-solid fa-trash fa-sm"></i>&nbsp;Delete
                    </button>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Eka Hospital</td>
                <td>Banten</td>
                <td>Serpong</td>
                <td>
                    <button type="button" class="btn btn-success editBtn">
                        <i class="fa-solid fa-pen-to-square fa-sm editBtn"></i>&nbsp;Edit
                    </button>
                    <button type="button" class="btn btn-danger deleteBtn">
                        <i class="fa-solid fa-trash fa-sm"></i>&nbsp;Delete
                    </button>
                </td>
            </tr>
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
