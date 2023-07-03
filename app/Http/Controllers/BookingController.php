<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Province;
use App\Models\Regency;
use App\Models\RumahSakit;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(){
        return view('booking-page.book1', [
            'provinces' => Province::all(),
            'title' => 'Booking Doctor',
            'active' => 'book',
            'day' => ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu']
            // 'regencies' => Regency::all(),
        ]);
    }

    public function getKabupaten (Request $request){
        $id_provinsi = $request->id_provinsi;

        $regencies = Regency::where('province_id', $id_provinsi)->get();

        echo "<option selected>Pilih Kabupaten</option>";
        foreach($regencies as $regency){
            echo "<option value='$regency->id'> $regency->name </option>";
        }
        
    }

    public function getHospital (Request $request){
        $id_kabupaten = $request->id_kabupaten;

        $hospitals = RumahSakit::where('regency_id', $id_kabupaten)->get();

        echo "<option selected>Pilih Rumah Sakit</option>";
        foreach($hospitals as $hospital){
            echo "<option value='$hospital->id'> $hospital->hospital_name </option>";
        }
    }

    public function getDoctor (Request $request){

        // dd($request);
        $id_rs = $request->id_rs;

        $doctors = Doctor::where('hospital_id', $id_rs)->get();

        foreach ($doctors as $doctor){
            echo "<div class='spesialisdoc'><div class = 'foto'> <img src='/img/dokter.png'></div>
            <div class='keterangan'>
                <div class='title-dokter'>
                    $doctor->doctor_name
                </div>
                <div class='nama-spesialis'>
                    <div class='icon'><i class='fa-solid fa-stethoscope'></i></div>
                    Dokter Spesialis Kandungan
                </div>
                <div class='rs-spesialis'>
                    <div class='icon'><i class='fa-solid fa-hospital'></i></div>
                    $doctor->hospital_id
                </div>
                <div class='loc-spesialis'>
                    <div class='icon'><i class='fa-solid fa-location-dot'></i></div>
                    Badung, Bali
                </div>
                <div class='tahun-spesialis'>
                    <div class='icon'><i class='fa-solid fa-business-time'></i></div>
                    $doctor->year_experience tahun
                </div>
            </div>
            <div class = 'bookbutton'>
                <a href='/book/$doctor->doctor_name'>
                    <button type = 'submit' class = 'btn btn-primary'>Book</button>
                </a>
            </div>
            </div>";
        }
        
    }

    public function bookDoctor(Doctor $doctor){
        return view('booking-page.detail-dokter', [
            'active' => 'book',
            'doctor' => $doctor,
        ]);
    }

    public function formBooking(){
        return view('booking-page.form-doctor', [
            'active' => 'book',
            // 'doctor' => $doctor,
        ]);
    }
}
