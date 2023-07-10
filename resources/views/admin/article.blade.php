@extends('admin.main')

@section('contents')

    {{-- Add Modal --}}
    <div class="modal fade" id="addModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Add Article</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="{{ route('addArticle') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="">Title</label>
                            <input type="text" name="title" required class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">File</label>
                            <input type="file" name="gambar" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label class="mb-2">Category</label>
                            <select class="form-select" id="doctorTitle" name="idCat">
                                <option selected>Pilih Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Body</label>
                            <textarea class="form-control" name="body" id="" cols="30" rows="10"></textarea>
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
    @foreach ($articles as $article)
    <div class="modal fade" id="editModal-{{ $article->id }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Article</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="{{ route('updateArticle', $article->id) }}" method="POST" enctype="multipart/form-data">
                    @method("put")
                    @csrf
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="">Title</label>
                            <input type="text" name="title" required class="form-control" value="{{ $article->title }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">File</label>
                            <input type="file" name="gambar" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label class="mb-2">Category</label>
                            <select class="form-select" id="doctorTitle" name="idCat" v>
                                <option selected>Pilih Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"@if($article->category_id == $category->id) selected @endif>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Body</label>
                            <textarea class="form-control" name="body" id="" cols="30" rows="10" >{{ $article->body }}</textarea>
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
    @foreach ($articles as $article)
    <div class="modal fade" id="deleteModal-{{ $article->id }}" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              {{-- <h5 class="modal-title">Modal title</h5> --}}
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <h3>Are you sure to delete this article?</h3>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <form action="{{ route('delete-article', $article->id) }}" method="POST">
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
                <h1>Article</h1>
            </div>
        </div>
        <hr style="margin-top:0px; margin-bottom:0px">

        {{-- subtitle --}}
        <div class="row mt-1">
            <div class="col-4" >
                <h3 class="text-secondary">Posted Article</h3>
            </div>
            <div class="col addBtn">
                <a href="#" class="text-decoration-none text-white float-end mt-2 rounded-0"  style="background-color: #78A2CC;">
                    <button type="button" class="btn text-white">
                        <i class="fa-solid fa-plus fa-md"></i>&nbsp;Add article
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
                <th scope="col">Category</th>
                <th scope="col">Title</th>
                {{-- <th scope="col">Body</th> --}}
                {{-- <th scope="col">Image</th> --}}
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($articles as $article)
            {{-- @dd($article->categories) --}}
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $article->category->name }}</td>
                <td class="col-5">{{ $article->title }}</td>
                {{-- <td class="text-truncate d-inline-block" style="max-width: 300px; max-height: 4.4em; overflow: hidden;">{{ $article->body }}</td> --}}
                {{-- <td><img src="{{ $article->imageUrl }}" alt="" style="width: 300px; height:300px"> </td> --}}
                <td class="col-4">
                    <a href="/article/detail/{{ $article->id }}" style="text-decoration: none">
                        <button type="button" class="btn btn-primary">
                            <i class="fa-solid fa-eye fa-sm"></i>&nbsp;View
                        </button>
                    </a>
                    {{-- <a href="#" class="text-decoration-none text-white"> --}}
                        <button type="button" class="btn btn-success editBtn" data-bs-toggle='modal' data-bs-target="#editModal-{{ $article->id }}">
                            <i class="fa-solid fa-pen-to-square fa-sm editBtn"></i>&nbsp;Edit
                        </button>
                    {{-- </a> --}}
                    {{-- <a href="#" class="text-decoration-none text-white"> --}}
                        <button type="button" class="btn btn-danger deleteBtn" data-bs-toggle='modal' data-bs-target="#deleteModal-{{ $article->id }}">
                            <i class="fa-solid fa-trash fa-sm"></i>&nbsp;Delete
                        </button>
                    {{-- </a> --}}
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <div class="row d-flex justify-content-end">{{ $articles->links() }}</div>
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
