@extends('layout.main')

@section('contents')
    <div class="container mt-4 bg">
        <h1>Ini untuk image</h1>
        <div class="dropdown-aja mt-4">
            <select class="form-select daerah" aria-label="Default select example" id="provinsi">
                <option selected>Pilih Provinsi</option>
                @foreach ($provinces as $province)
                    <option value="{{ $province->id }}">{{ $province->name }}</option>
                @endforeach
            </select>
            <select class="form-select daerah" aria-label="Default select example" id="kabupaten">
                <option selected>Pilih Kabupaten</option>
                {{-- @foreach ($regencies as $regency)
                    <option value="{{ $regency->id }}">{{ $regency->name }}</option>
                @endforeach --}}
            </select>
            <select class="form-select daerah" aria-label="Default select example" id="hospital">
                <option selected>Pilih Rumah Sakit</option>
                
            </select>
        </div>
    </div>

    
@endsection