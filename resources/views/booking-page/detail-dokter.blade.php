@extends('layout.main')

@section('css')
        <link rel="stylesheet" href="/css/navbar.css">
        <link rel="stylesheet" href="/css/detail-dokter.css">
@endsection

@section('contents')
    <div class="container">
        <section class="back-button">
            <div class="button">
                <a href="#">
                    <img src="/img/back-button.png" alt="">
                </a>
            </div>
        </section>

        <section class="content">
            <div class="row dokter">
                <div class="col-lg-7 profil-dokter">
                    <h2 class="judul">Profil Dokter</h2>
                    <p class="box">
                        Dr. Ida Ayu Putri Maharani adalah seorang Dokter Spesialis Kandungan yang berpraktik di Rumah Sakit Mangusada. Beliau dapat membantu layanan Konsultasi mengenai kandungan.
                        <br> <br>
                        Dr. Ida Ayu Putri Maharani menamatkan pendidikan Kedokteran Umum di Universitas Kristen Krida Wacana, lulus pada tahun 2019. Selain itu, beliau juga tercatat sebagai anggota Ikatan Dokter Indonesia (IDI).
                    </p>
                </div>
                {{-- <div class="col-lg-2"></div> --}}
                <div class="col-lg identitas-dokter d-flex flex-column align-items-center">
                    <img src="/img/foto-dokter.png" alt="" class="img-fluid mx-auto d-block">
                    <h3 class="fw-bold">Dr. Ida Ayu Putri Maharani</h3>
                    <p class="jenis-dokter" style="color: #78A2CC">
                        Dokter Spesialis Kandungan
                    </p>
                    <button type="submit" class="btn fw-bold" style="background-color: #78A2CC; color: white; width:50%">
                        <a href="#" class="text-decoration-none text-white">Book</a>
                    </button>
                </div>
            </div>
            <div class="praktek-dokter col-lg-7">
                <h2 class="judul">Lokasi & Jadwal Praktik</h2>
                <div class="box">
                    <div class="rumah-sakit d-flex">
                        <img src="/img/foto-rs.png" alt="">
                        <div class="profil-rs" style="margin-left: 10px">
                            <h3 class="nama-rs">
                                RSUD Mangusada
                            </h3>
                            <p class="lokasi">
                                Badung, Bali
                                <br>
                                Kamis, Jumat, Sabtu
                            </p>
                        </div>
                    </div>
                    <div class="list-jadwal mt-2">
                        <div class="item">
                            <h4 class="tanggal">
                                Kamis , 6 April 2023
                            </h4>
                            <p class="jam">
                                09.00 - 12.00
                            </p>
                            <hr>
                        </div>
                        <div class="item">
                            <h4 class="tanggal">
                                Kamis , 6 April 2023
                            </h4>
                            <p class="jam">
                                09.00 - 12.00
                            </p>
                            <hr>
                        </div>
                        <div class="item">
                            <h4 class="tanggal">
                                Kamis , 6 April 2023
                            </h4>
                            <p class="jam">
                                09.00 - 12.00
                            </p>
                            <hr>
                        </div>
                        <div class="item">
                            <h4 class="tanggal">
                                Kamis , 6 April 2023
                            </h4>
                            <p class="jam">
                                09.00 - 12.00
                            </p>
                            <hr>
                        </div>
                        <div class="all-list-button">
                            <a class="asu" href="#">
                                <img src="/img/logo-kalender.png" alt="">
                                <p>
                                    Tampilkan Jadwal Lainnya
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="journey-dokter col-lg-7 mt-2">
                <h2 class="judul">Pengalaman Praktik</h2>
                <div class="box">
                    <div class="pengalaman">
                        <p class="jabatan">
                            Dokter Spesialis Kandungan - RSUD Mangusada
                        </p>
                        <p class="tahun">
                            2016 - 2018
                        </p>
                        <hr>
                    </div>
                    <div class="pengalaman">
                        <p class="jabatan">
                            Dokter Spesialis Kandungan - RSUD Mangusada
                        </p>
                        <p class="tahun">
                            2016 - 2018
                        </p>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="pendidikan-dokter col-lg-7 mt-2">
                <h2 class="judul">Riwayat Pendidikan</h2>
                <div class="box">
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
        </section>
    </div>
    <footer>
        <div>
            <p> INI FOOTER NANTI </p>
        </div>
    </footer>
    
@endsection