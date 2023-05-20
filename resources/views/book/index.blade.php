@extends('layout.main')

@section('title')
    <title>PPTI | {{ $title }}</title>
@endsection


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
        <div class="row mt-4">
            <div class="col-lg-4">
                ini untuk status book
            </div>
            <div class="col-lg-7 pilih-hari">
                Pilih Dokter
                <div class="dropdown-hari mt-2">
                    <select class="form-select hari" aria-label="Default select example" id="hari">
                        <option selected>Pilih Hari</option>
                        {{-- @foreach ($provinces as $province)
                            <option value="{{ $province->id }}">{{ $province->name }}</option>
                        @endforeach --}}
                    </select>
                    <select class="form-select hari" aria-label="Default select example" id="jam">
                        <option selected>Pilih Jam</option>
                        {{-- @foreach ($regencies as $regency)
                            <option value="{{ $regency->id }}">{{ $regency->name }}</option>
                        @endforeach --}}
                    </select>
                </div>
            </div>
        </div>
    </div>

    
@endsection