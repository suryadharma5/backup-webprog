@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="/css/detail-dokter.css">
@endsection

@section('title')
    <title>Hamily | Booking Detail</title>
@endsection

@section('contents')
    <div class="container">
        <section class="back-button mt-4">
            <div class="button">
                <a href="/book">
                    <img src="/img/back-button.png" alt="">
                </a>
            </div>
        </section>

        <section class="content mt-4">
            <div class="row dokter">
                <div class="col-lg-8 profil-dokter">
                    <h2 class="judul fw-bold">Profil Dokter</h2>
                    <div class="col-lg">
                        <div class="box border py-2 px-3 border-3" style="border-radius: 10px">
                            <p>{{ $doctor->doctor_name }} adalah seorang Dokter Spesialis Kandungan yang berpraktik di Rumah Sakit Mangusada. Beliau dapat membantu layanan Konsultasi mengenai kandungan.
                            <br><br>
                            {{ $doctor->doctor_name }} menamatkan pendidikan Kedokteran Umum di Universitas Kristen Krida Wacana, lulus pada tahun 2019. Selain itu, beliau juga tercatat sebagai anggota Ikatan Dokter Indonesia (IDI).</p>
                        </div>
                    </div>
                    <div class="praktek-dokter col-lg mt-4">
                        <h2 class="judul fw-bold">Lokasi & Jadwal Praktik</h2>
                        <div class="box border py-2 px-3 border-3" style="border-radius: 10px">
                            <div class="rumah-sakit d-flex align-items-center">
                                <img src="/img/foto-rs.png" alt="">
                                <div class="profil-rs mx-3">
                                    <h3 class="nama-rs fw-bold">
                                        {{ $doctor->rumahSakit->hospital_name }}
                                    </h3>
                                    <p class="lokasi">
                                        Badung, Bali                                
                                    </p>
                                </div>
                            </div>
                            <div class="list-jadwal mt-3">
                                <div class="item">
                                    <h4 class="tanggal">
                                        Kamis , 6 April 2023
                                    </h4>
                                    <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btncheck1">09.00 - 12.00</label>
                                    <hr>
                                </div>
                                <div class="item">
                                    <h4 class="tanggal">
                                        Kamis , 6 April 2023
                                    </h4>
                                    <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btncheck2">09.00 - 12.00</label>
                                    <hr>
                                </div>
                                <div class="item">
                                    <h4 class="tanggal">
                                        Kamis , 6 April 2023
                                    </h4>
                                    <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btncheck3">09.00 - 12.00</label>
                                    <hr>
                                </div>
                                <div class="item">
                                    <h4 class="tanggal">
                                        Kamis , 6 April 2023
                                    </h4>
                                    <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btncheck4">09.00 - 12.00</label>
                                    <hr>
                                </div>
                                {{-- <div class="all-list-button px-2 py-2 d-flex flex-row align-items-center rounded-2 fw-bold justify-content-center" style="width: 38%; background-color: #78A2CC; color:white;">
                                    <img src="/img/logo-kalender.png" alt="">
                                    <a class="text-decoration-none text-white mx-2" href="#">
                                        Tampilkan Jadwal Lainnya
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="journey-dokter col-lg mt-4">
                        <h2 class="judul fw-bold">Pengalaman Praktik</h2>
                        <div class="box border py-2 px-3 border-3" style="border-radius: 10px">
                            <div class="pengalaman">
                                <p class="jabatan">
                                    Dokter Spesialis Kandungan - RSUD Mangusada
                                </p>
                                <p class="tahun fw-semibold" style="color: #78A2CC">
                                    2016 - 2018
                                </p>
                                <hr>
                            </div>
                            <div class="pengalaman">
                                <p class="jabatan">
                                    Dokter Spesialis Kandungan - RSUD Mangusada
                                </p>
                                <p class="tahun fw-semibold" style="color: #78A2CC">
                                    2016 - 2018
                                </p>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="pendidikan-dokter col-lg mt-4">
                        <h2 class="judul fw-bold">Riwayat Pendidikan</h2>
                        <div class="box border py-2 px-3 border-3" style="border-radius: 10px">
                            <div class="pengalaman">
                                <p class="jabatan">
                                    Kedokteran Umum -  Universitas Kristen Krida Wacana
                                </p>
                                <p class="tahun">
                                    2010 - 2016
                                </p>
                                <hr>
                            </div>
                            <div class="pengalaman">
                                <p class="jabatan">
                                    Kedokteran Umum -  Universitas Kristen Krida Wacana
                                </p>
                                <p class="tahun">
                                    2010 - 2016
                                </p>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg identitas-dokter d-flex flex-column align-items-center">
                    <div class="gambar">
                        <img src="/img/foto-dokter.png" alt="" class="img-fluid mx-auto d-block">
                    </div>
                    <h3 class="fw-bold">{{ $doctor->doctor_name }}</h3>
                    <p class="jenis-dokter" style="color: #78A2CC">
                        Dokter Spesialis Kandungan
                    </p>
                    <button type="button" class="btn fw-bold" style="background-color: #78A2CC; color: white; width:30%">
                        <a href="#" class="text-decoration-none text-white">Book</a>
                    </button>
                </div>
            </div>
            
        </section>
    </div>
    <div class="mb-5"></div>
    {{-- <footer>
        <div>
            <p> INI FOOTER NANTI </p>
        </div>
    </footer> --}}
    
@endsection