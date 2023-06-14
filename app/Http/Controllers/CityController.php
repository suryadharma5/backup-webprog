<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\Regency;
use App\Models\RumahSakit;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(){
        return view('book-dokter-step.book1', [
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
            echo "<option value='$hospital->id> $hospital->hospital_name </option>";
        }
    }
}
