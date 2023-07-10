<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Models\Category;
use App\Models\Doctor;
use App\Models\User;
use App\Models\Regency;
use App\Models\Province;
use App\Models\RumahSakit;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard', [
            'on' => 'dashboard',
            'usersCount' => User::all(),
            'users' => User::latest()->paginate(10),
            'articles' => Article::all()
        ]);
    }

    public function hospital(){
        return view('admin.hospital', [
            'on' => 'hospital', 
            'hospitals' => RumahSakit::latest()->paginate(10),
            Paginator::useBootstrap(),
            'provinces' => Province::all(),
        ]);
    }

    // public function getKabupaten (Request $request){
    //     $id_provinsi = $request->idProvinsi;

    //     $regencies = Regency::where('province_id', $id_provinsi)->get();

    //     echo "<option selected>Pilih Kabupaten</option>";
    //     foreach($regencies as $regency){
    //         echo "<option value='$regency->id'> $regency->name </option>";
    //     }
        
    // }

    public function updateHospital(Request $request, $id){
        $hospital = RumahSakit::findOrFail($id);

        // dd($request->all());
        
        // $hospital->province_id = $request->input('');

        // $data = $request->all();
        // dd($hospital);
        // RumahSakit::where(['id'=>$id])->update(['province_id'=>$data['idProvinsi'], 'regency_id'=>$data['idKabupaten'], 'hospital_name'=>$data['hospitalName']]);

        $hospital->province_id = $request->input('idProvinsi');
        $hospital->regency_id = $request->input('idKabupaten');
        $hospital->hospital_name = $request->input('hospitalName');
        
        // dd($request->hospitalName);
        $hospital->save();

        return redirect()->back()->with('message', 'Update successful');
    }

    public function addHospital(Request $request){
        RumahSakit::create([
            'province_id' => $request->input('idProvinsi'),
            'regency_id' => $request->input('idKabupaten'),
            'hospital_name' =>$request->input('hospitalName')
        ]);

        return redirect()->back()->with('message', 'Add successful');
    }

    public function destroyHospital(Request $request, $id){
        $hospital = RumahSakit::findOrFail($id);
        $hospital->delete();

        return redirect()->back()->with('message', 'Delete successful');

    }


    public function doctor(){
        return view('admin.doctor', [
            'on' => 'doctor',
            'doctors' => Doctor::latest()->paginate(10),
            Paginator::useBootstrap(),
            'provinces' => Province::all(),
        ]);
    }

    public function addDoctor(Request $request){
        Doctor::create([
            'hospital_id' => $request->input('idHospital'),
            'title_id' => $request->input('idTitle'),
            'doctor_name' => $request->input('doctorName'),
            'doctor_profile' => $request->input('biodata'),
            'year_experience' => $request->input('yearExperience'),
        ]);

        return redirect()->back()->with('message', 'Add doctor successful');
    }

    public function updateDoctor(Request $request, $id){
        $doctor = Doctor::findOrFail($id);

        $doctor->hospital_id = $request->input('idHospital');
        $doctor->title_id = $request->input('idTitle');
        $doctor->doctor_name = $request->input('doctorName');
        $doctor->doctor_profile = $request->input('biodata');
        $doctor->year_experience = $request->input('yearExperience');

        $doctor->save();

        return redirect()->back()->with('message', 'Update doctor successful');
    }

    public function destroyDoctor(Request $request, $id){
        $doctor = Doctor::findOrFail($id);
        $doctor->delete();

        return redirect()->back()->with('message', 'Delete doctor successful');

    }

    public function article(){
        return view('admin.article', [
            'on' => 'article',
            'articles' => article::latest()->paginate(10),
            Paginator::useBootstrap(),
            'categories' => Category::all()
        ]);
    }

    public function addArticle(Request $request){
        $createdAt = Carbon::parse($request->created_at);
        $dayName = $createdAt->format('l'); // Mengambil nama hari dalam bahasa Inggris, misalnya "Monday"
        $monthName = $createdAt->format('F'); // Mengambil nama bulan dalam bahasa Inggris, misalnya "January"
        $year = $createdAt->format('Y'); 

        if($request->hasFile('gambar')){
            $fileimage = $request->file('gambar');
            $imagename = $request->title.".".$fileimage->getClientOriginalExtension(); //sebelum mengakhiri dengan extension kita bisa nambah dengan nama image dengan nim
            Storage::disk('public')->putFileAs('img', $fileimage, $imagename);

            $body = nl2br($request->input('body'));
            $body = '<p>' . preg_replace('/\r\n|\r|\n/', '</p><p>', $body) . '</p>';

            article::create([
                'category_id' => $request->idCat, 
                'title' => $request->title,
                'body' => $body,
                'imageUrl' => Storage::url('img/'.$imagename),
                'day' => $dayName,
                'month' => $monthName,
                'year' => $year
            ]);

            return redirect()->back()->with('message', 'Add article successful');
        }
        
        $body = nl2br($request->input('body'));
        $body = '<p>' . preg_replace('/\r\n|\r|\n/', '</p><p>', $body) . '</p>';

        article::create([
            'category_id' => $request->idCat, 
            'title' => $request->title,
            'body' => $body,
            'day' => $dayName,
            'month' => $monthName,
            'year' => $year
        ]);

        return redirect()->back()->with('message', 'Add article successful');
    }

    public function updateArticle(Request $request, $id){
        $article = article::findOrFail($id);
        $createdAt = Carbon::parse($article->created_at);
        $dayName = $createdAt->format('l'); // Mengambil nama hari dalam bahasa Inggris, misalnya "Monday"
        $monthName = $createdAt->format('F'); // Mengambil nama bulan dalam bahasa Inggris, misalnya "January"
        $year = $createdAt->format('Y'); 

        $article->category_id = $request->idCat;
        $article->title = $request->title;
        $article->day = $dayName;
        $article->month = $monthName;
        $article->year = $year;


        $body = nl2br($request->input('body'));
        $body = '<p>' . preg_replace('/\r\n|\r|\n/', '</p><p>', $body) . '</p>';

        $article->body = $body;

        if($request->hasFile('gambar')){
            $fileimage = $request->file('gambar');
            $imagename = $request->title.".".$fileimage->getClientOriginalExtension(); //sebelum mengakhiri dengan extension kita bisa nambah dengan nama image dengan nim
            Storage::disk('public')->putFileAs('img', $fileimage, $imagename);
            $article->imageUrl = Storage::url('img/'.$imagename);
        }

        $article->save();

        return redirect()->back()->with('message', 'Update article successful');
    }

    public function destroyArticle(Request $request, $id){
        $ar = article::findOrFail($id);
        $ar->delete();

        return redirect()->back()->with('message', 'Delete article successful');

    }

    
}
