@extends('layout.main')


@section('css')
        <link rel="stylesheet" href="/css/book1.css">
@endsection
        
@section('title')
<title>Hamily | {{ $title }}</title>
@endsection
        
@section('contents')
    @if (session()->has('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}',
            });  
        </script>
    @endif
    <div class="container-fluid g-0 container-gb-book-dokter overflow-hidden" style="position: relative">
            <img src="/img/bg-book-dokter.png" alt="" style="z-index:1" class="bg-book-dokter img-fluid" width="100%">
            <div class="container-fluid g-0 container-text-info-bg" style="position: absolute; z-index: 2">
                <div class="row"> 
                    <div class="offset-5 col-3 d-flex justify-content-end">
                        <img src="/img/check-circle-rounded.svg" alt="" class="img-check-info">
                    </div>
                    <div class="col-4 text-info-bg d-flex align-items-center text-check-info" >Ribuan Dokter Berpengalaman</div>
                </div>
                <div class="row mt-3"> 
                    <div class="offset-5 col-3 d-flex justify-content-end">
                        <img src="/img/check-circle-rounded.svg" alt="" class="img-check-info">
                    </div>
                    <div class="col-4 text-info-bg d-flex align-items-center text-check-info" >Dari Rumah Sakit Terbaik</div>
                </div>
                <div class="row mt-3"> 
                    <div class="offset-5 col-3 d-flex justify-content-end">
                        <img src="/img/check-circle-rounded.svg" alt="" class="img-check-info">
                    </div>
                    <div class="col-4 text-info-bg d-flex align-items-center text-check-info" >Kepastian Jadwal Booking</div>
                </div>
            </div>
            <div class="gelombang" style="position: absolute; z-index: 15; width:100%;">
                <img src="/img/gelombang.png" alt="" srcset="" style="width: 100%;" class="img-fluid">
            </div>
    </div>
    <div class="mt-2">
            <div class="full-width-content">
                
                <div class="container">
                    <div class="dropdown-aja">
                        <select class="form-select daerah" aria-label="Default select example" id="provinsi">
                            <option selected disabled>Pilih Provinsi</option>
                            @foreach ($provinces as $province)
                            <option value="{{ $province->id }}">{{ $province->name }}</option>
                            @endforeach
                        </select>
                        <select class="form-select daerah" aria-label="Default select example" id="kabupaten">
                            <option selected disabled>Pilih Kabupaten</option>
                        </select>
                         <select class="form-select daerah" aria-label="Default select example" id="hospital">
                            <option selected disabled>Pilih Rumah Sakit</option>
                        </select>
                    </div>
                </div>

                <div class="row mt-4">
                </div>
        
                <div class="contentbookingdokter" id="result">
                    <div class="row">
                        <div class="col-md-4 status-book">
                            <div class="title">
                                Status Book
                            </div>
                            @if (auth()->user())
                                @foreach ($bookings as $book)
                                    @if (auth()->user()->id == $book->user_id)
                                        <div class="row box text-center">
                                            <div class="box-atas">
                                                <div class="date">
                                                   Hari {{$book->hari_praktek}}
                                                </div>
                                                <div class="time">
                                                    Pukul {{ $book->jam_praktek }}.00 WIB
                                                </div>
                                            </div>
                                            <div class="box-bawah">
                                                <div class="datadokter">
                                                    <div class="nama-dokter">
                                                        <div class="icon">
                                                            <i class="fa-solid fa-user-doctor" style="color: #FFA5B8;" ></i>
                                                        </div>
                                                        {{ $book->doctor->doctor_name }}
                                                    </div>
                                                    <div class="nama-rs">
                                                        <div class="icon">
                                                            <i class="fa-solid fa-hospital" style="color: #FFA5B8;"></i>
                                                        </div>
                                                       {{ $book->doctor->rumahSakit->hospital_name }}
                                                    </div>
                                                </div>
                                                <form class="cancelbutton" action="/book/delete/{{ $book->id }}" method="POST">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="button" class="btn btn-primary" onclick=confirmDelete()>Cancel</button>
                                                </form>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endif
            
                        </div>
                        <!-- ----------------------------POP UP KONFIRMASI----------------------------------- -->
                        {{-- <div id="popup1" class="overlay">
                            <div class="popup">
                                <div class="warning-icon">
                                    <i class="fa-solid fa-triangle-exclamation" style="color: #FFA5B8;"></i>
                                </div>
                                <div class="alert">
                                    Yakin Ingin Melanjutkan Pembatalan Booking?
                                </div>
                                <div class="kumpulan-button">
                                    <div class="buttonkembali">
                                        <a href="#">
                                            <button type="button" class="btn btn-primary kembali">Kembali</button>
                                        </a>
                                    </div>
                                    <div class="buttonlanjut">
                                        <a href="#popup2">
                                            <button type="button" class="btn btn-primary cancel">Lanjut</button>
                                        </a>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                        <!-- ----------------------------END POP UP KONFIRMASI----------------------------------- -->
                        <!-- ----------------------------POP UP BERHASIL----------------------------------- -->
                        <div id="popup2" class="overlay">
                            <div class="popup2">
                                <div class="alert">
                                    Book Anda Telah Berhasil Dibatalkan
                                </div>
                                <div class="buttonkembali">
                                    <a href="#">
                                        <button type="button" class="btn btn-primary kembali">Kembali</button>
                                    </a>
                                </div>
                            </div>
                        </div> --}}
                        <!-- ----------------------------END POP UP BERHASIL----------------------------------- -->
                        <div class="col-md-8 pilih-dokter">
                            <div class="title">
                                Pilih Dokter
                            </div>
                            {{-- <div class="row">
                                <div class="dropdown-hari mt-2 col-lg-8">
                                    <select class="form-select hari" aria-label="Default select example" id="hari">
                                        <option selected>Pilih Hari</option>
                                    </select>
                                    <select class="form-select hari" aria-label="Default select example" id="jam">
                                        <option selected>Pilih Jam</option>
                                        @foreach ($regencies as $regency)
                                            <option value="{{ $regency->id }}">{{ $regency->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> --}}


                            <div class="row" id="listDoctor">
                                @foreach ($doctors as $doctor)
                                <div class='spesialisdoc mb-4'><div class = 'foto'> <img src='/img/dokter.png'></div>
                                <div class='keterangan'>
                                    <div class='title-dokter'>
                                        {{ $doctor->doctor_name }}
                                    </div>
                                    <div class='nama-spesialis'>
                                        <div class='icon'><i class='fa-solid fa-stethoscope'></i></div>
                                        Dokter Spesialis Kandungan
                                    </div>
                                    <div class='rs-spesialis'>
                                        <div class='icon'><i class='fa-solid fa-hospital'></i></div>
                                        {{ $doctor->hospital_id }}
                                    </div>
                                    <div class='loc-spesialis'>
                                        <div class='icon'><i class='fa-solid fa-location-dot'></i></div>
                                        {{ Str::after($doctor->rumahSakit->regency->name, 'KABUPATEN') }}, {{ $doctor->rumahSakit->province->name }}
                                    </div>
                                    <div class='tahun-spesialis'>
                                        <div class='icon'><i class='fa-solid fa-business-time'></i></div>
                                        {{ $doctor->year_experience }} tahun
                                    </div>
                                </div>
                                <div class = 'bookbutton'>
                                    <a href='/book/{{ $doctor->id }}'>
                                        <button type = 'submit' class = 'btn btn-primary'>Book</button>
                                    </a>
                                </div>
                                </div>
                                @endforeach
                                <div class="container mt-5 d-flex justify-content-end">
                                    {{ $doctors->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
        
                </div>
                {{-- <div class="footer">INI FOOTER</div> --}}
        
            </div>
    </div>
        
@endsection