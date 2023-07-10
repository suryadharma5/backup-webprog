@extends('layout.main')

@section('css')
        <link rel="stylesheet" href="/css/navbar.css">
        <link rel="stylesheet" href="/css/menfess.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
@endsection

@section('title')
<title>Hamily | {{ $title }}</title>
@endsection


@section('contents')

    <div class="modal fade" id="confirmModal" tabindex="-1">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            {{-- <h5 class="modal-title">Modal title</h5> --}}
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <h3>Continue to post this article?</h3>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Yes</button>
            </div>
        </div>
        </div>
    </div>

    <div class="container m-10">
        <div class="backBtnU">
            <a href="/menfess">
                <i class="fa-solid fa-circle-arrow-left fa-2xl"></i>
            </a>
        </div>
        <h1 class="mt-4 text-center" style="color: #FFB8C7;">
            Post Menfess
        </h1>
        <form class="row g-3" action="{{ route('addMenfess') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-12">
              <label for="" class="form-label">Title</label>
              <input type="text" value="{{ old('title') }}" class="form-control @error('title')is-invalid @enderror" id="" name="Title">
              {{-- class 'is-invalid' pada bootstrap akan memberikan border berwarna merah & ada tanda seru --}}
              @error('Title')
                <div class="text-danger">{{ $message }}</div>
              @enderror
              {{-- 'text-danger' akan memberikan pesan di bawah kolomnya--}}
            </div>
            <div class="col-12">
              <label for="" class="form-label">Description</label>
              <textarea class="form-control" aria-label="With textarea" name="Description"></textarea>
              {{-- <input type="longtext" value="{{ old('desc') }}" class="form-control @error('desc') is-invalid @enderror" id="" name="Description"> --}}
                @error('Description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12">
              <label for="" class="form-label">Picture</label>
              <input type="file" class="form-control @error('pict') is-invalid @enderror" id="" name="pict">
              @error('pict')
                <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-12 d-flex justify-content-center">

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary submitBtn" data-bs-toggle="modal" data-bs-target="#edit-modal">
                    SEND
                </button>

                <!-- Modal -->
                <div class="modal fade" id="edit-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content" style="background-color: #78A2CC; height:220px;">
                        {{-- <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Updation Confirmation</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div> --}}
                        <div class="modal-body d-flex justify-content-center align-items-center">
                            <h4 class="text-white">Are you sure to post your menfess?</h4>
                        </div>
                        <div class="modal-footer d-flex justify-content-around align-items-center">
                            <button type="submit" class="btn btn-primary submitBtn text-white">YES</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NO</button>
                        </div>
                    </div>
                    </div>
                </div>

    </div>
          </form>
    </div>

@endsection

@section('scripts')

<script>

    $(document).ready(function(){

        $(document).on('click', '.submitBtn', function(){
            // var article_id = $(this).val();
            $('#confirmModal').modal('show');
        });
    })
</script>

@endsection
