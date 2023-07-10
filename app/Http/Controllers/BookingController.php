<?php

namespace App\Http\Controllers;

use App\Models\Booking;
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
            'doctors' => Doctor::latest()->simplepaginate(5),
            'title' => 'Booking Doctor',
            'active' => 'book',
            'bookings' => Booking::latest()->get()
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
            $kab = strtolower(str_replace('KABUPATEN', '', $doctor->rumahSakit->regency->name));
            $kab[1] = strtoupper($kab[1]);
            $prov = ucfirst(strtolower($doctor->rumahSakit->province->name));

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
                    $kab, $prov
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
            'title' => 'Booking Doctor',
            'active' => 'book',
            'doctor' => $doctor,
        ]);
    }

    public function formBooking(Doctor $doctor){
        return view('booking-page.formbook', [
            'title' => 'Booking Doctor',
            'active' => 'book',
            'doctor' => $doctor,
            // 'doctor' => $doctor,
        ]);
    }

    public function store(Request $request)
    {
        // dd($request);
        $validateddata = $request->validate([
            'nama' => 'required|max:255',
            'doctor_id' => 'required',
            'user_id' => 'required',
            'email' => 'required|email:dns',
            'telephone'=> 'required|min:10|max:12',
            'hari_praktek' => 'required',
            'jam_praktek' => 'required'
        ]);

        // dd($validateddata);

        Booking::create($validateddata);

        return redirect('/book')->with('success', 'Booking berhasil dibuat');
    }

    public function destroy($id)
    {
        $booking = Booking::find($id);
        // dd($menfessReply);
        $booking->delete();
        return redirect('/book')-> with('success', 'Booking berhasil dibatalkan');
    }
}
