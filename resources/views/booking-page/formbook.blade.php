@extends('layout.main')

@section('css')
        <link rel="stylesheet" href="/css/formbook.css">
@endsection

@section('title')
  <title>Hamily | {{ $title }}</title>
@endsection

{{-- @dd($doctor) --}}

@section('contents')
<div class="container box-form-luar">
  <section class="back-button">
    <div class="button">
        <a href="/book/{{ $doctor->id }}">
            <img src="/img/back-button.png" alt="">
        </a>
    </div>
  </section>

    <div class="col-12 text-pastikan mt-2">
        Pastikan Pilihan Anda Sudah Tepat
    </div>
    <div class="box-info-dokter row g-0 mt-3">
        <div class="col-4 d-flex justify-content-center align-items-center">
            <img src="/img/gb-dokter-form-info.png" class="gb-dokter-form-info mt-3 mb-3">
        </div>

        <div class="col-6 pt-5">
            <div class="nama-dokter-info-form">
                {{ $doctor->doctor_name }}
            </div>
            <div class="dokter-desc-form-info">
                {{ $doctor->rumahSakit->hospital_name }}, {{ Str::after($doctor->rumahSakit->regency->name, 'KABUPATEN') }}, {{ $doctor->rumahSakit->province->name }}
            </div>
            <div class="dokter-desc-form-info">
                Kamis, 6 April 2023
            </div>
            <div class="dokter-desc-form-info">
                09.00 - 12.00
            </div>
        </div>
    </div>

    <form class="row mt-3" action="/book/{{ $doctor->id }}/coba/add" method="POST">
      @csrf
      <div class="mb-3">
        <label for="nama" class="form-label">Nama Lengkap</label>
        <input type="text" name="nama" class="form-control" id="formGroupExampleInput" placeholder="" value="{{ auth()->user()->username }}" required>
      </div>
      <div class="mb-3">
        <label for="nik" class="form-label">NIK</label>
        <input type="text" name="nik" class="form-control" id="formGroupExampleInput2" placeholder="" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="formGroupExampleInput2" placeholder="" value="{{ auth()->user()->email }}" required>
      </div>
      <div class="mb-3">
        <label for="telephone" class="form-label">Nomor Telepon</label>
        <input type="tel" class="form-control" name="telephone" maxlength="12"  required value="{{ auth()->user()->phone_number }}" required>
      </div>
      <div class="list-jadwal mt-3 col-lg-12 mb-3">
        <label for="" class="form-label">Pilih Jadwal</label>
        {{-- <h5>Hari</h5> --}}
        <div class="col-md d-flex flex-row" action="/">
            <div class="col-md-5">
                <select class="form-select" id="validationCustom04" name="hari_praktek" style="background-color: #D1D1D1" required>
                    <option selected disabled>Hari</option>
                    @if ($doctor->hari_praktek)
                        @foreach ($doctor->hari_praktek as $hari)
                            <option value="{{ $hari }}">{{ $hari }}</option>
                        @endforeach
                    @endif
                </select>
                <div class="invalid-feedback">
                    Please select a valid state.
                </div>
            </div>
            <div class="col-md-5 ms-5">
                <select class="form-select" id="validationCustom04" style="background-color: #D1D1D1" name="jam_praktek" required>
                    <option selected disabled>Jam</option>
                    @for ($i = $doctor->jam_awal; $i <= $doctor->jam_akhir; $i++)
                        @if ($i < 10)
                            <option value="{{ $i }}">0{{ $i }}.00</option> 
                        @else
                            <option value="{{ $i }}">{{ $i }}.00</option> 
                        @endif
                    @endfor
                </select>
                <div class="invalid-feedback">
                    Please select a valid state.
                </div>
            </div>
      </div>

      <input type="hidden" name="doctor_id" value="{{ $doctor->id }}">
      <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

      <div class="offset-4 col-4 mt-4">
        <button type="submit" class="tombol-book-dokter mb-5">
            <div class="text-tombol-book">
                Book
            </div>
        </button>
      </div>
    </form>
    </div>
    


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="offset-2 col-8" style="text-align: justify">
            <div class="book-sukses pt-3 pb-3 col-12 text-center">
              Booking Success !
            </div>
            <p class="book-sukses-detail">
              Jangan lupa datang ke RSUD Mangusada <span class="book-sukses-detail-span"> Kamis, 6 April 2023, Jam 09.00 - 12.00</span> 
              Semoga konsultasinya berjalan lancar & memuaskan
            </p>
            <button class="col-2 tombol-book-dokter mt-3">
              <div class="kembali" style="font-weight: bold">Kembali</div>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection