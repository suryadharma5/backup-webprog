<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index', [
        'title' => 'Home',
        'active' => 'home'
    ]);
});

// Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
// Route::post('/login', [LoginController::class, 'authenticate']);
// Route::get('/logout', [LoginController::class, 'logout']);

// Route::get('/register', [RegisterController::class, 'index']);
// Route::post('/register', [RegisterController::class, 'store']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//404 handler
Route::fallback(function () {
    return view('404');
});

Route::get('/article', [ArticleController::class, 'index']);
Route::get('/detailArticle', [ArticleController::class, 'detail']);

Route::get('/book', [BookingController::class, 'index']);
Route::post('/getKabupaten', [BookingController::class, 'getKabupaten']);
Route::post('/getHospital', [BookingController::class, 'getHospital']);
Route::post('/getDoctor', [BookingController::class, 'getDoctor']);
Route::get('/book/{doctor:doctor_name}', [BookingController::class, 'bookDoctor']);

Route::get('/rating', [RatingController::class, 'index']);
