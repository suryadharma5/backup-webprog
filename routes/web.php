<?php

use App\Http\Controllers\ProfileController;
use App\Models\Review;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\MenfessController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MenfessReplyController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/article', [ArticleController::class, 'index']);
Route::get('/article/detail/{article}', [ArticleController::class, 'detail']);

Route::get('/book', [BookingController::class, 'index']);
Route::post('/getKabupaten', [BookingController::class, 'getKabupaten']);
Route::post('/getHospital', [BookingController::class, 'getHospital']);
Route::post('/getDoctor', [BookingController::class, 'getDoctor']);
Route::get('/book/{doctor}', [BookingController::class, 'bookDoctor'])->middleware('auth');
Route::get('/book/{doctor}/coba', [BookingController::class, 'formBooking'])->middleware('auth');
Route::post('/book/{doctor}/coba/add', [BookingController::class, 'store'])->middleware('auth');

Route::get('/rating', [RatingController::class, 'index']);
Route::get('/rating/productSearch', [RatingController::class, 'prodSearch']);
Route::get('/rating/sucessProd/{data}', [RatingController::class, 'prodSuccess']);
Route::get('/rating/detail/{prod}', [RatingController::class, 'detailRating'])->middleware('auth');
Route::resource('/rating/detail/review', ReviewController::class);
Route::resource('/rating/product', ProductController::class)->middleware('auth');

Route::get('/menfess', [MenfessController::class, 'index']);
Route::get('/menfess/detail/{menfess}', [MenfessController::class, 'detail'])->middleware('auth');
Route::resource('/menfess/detail/reply', MenfessReplyController::class);

Route::get('/track', function(){
    return view('track.index', [
        'active' => 'track',
        'title' => 'Tracking'
    ]);
});

Route::get('/track/form', function(){
    return view('track.hpl', [
        'active' => 'track',
        'title' => 'Tracking'
    ]);
});



Route::get('/profile', function(){
    return view('profile.index', [
        'active' => 'profile',
        'title' => 'Profile'
    ]);
});




Route::get('/adminArticle', [AdminController::class, 'article']);
Route::get('/adminDashboard', [AdminController::class, 'dashboard']);
Route::get('/adminDoctor', [AdminController::class, 'doctor']);
Route::get('/adminHospital', [AdminController::class, 'hospital']);

Route::put('/adminHospital/{id}', [AdminController::class, 'updateHospital'])->name('adminHospital');
Route::post('adminHospital', [AdminController::class, 'addHospital'])->name('addHospital');
Route::delete('/adminHospital/del/{id}',  [AdminController::class, 'destroyHospital'])->name('delete-hospital');

Route::post('adminDoctor', [AdminController::class, 'addDoctor'])->name('addDoctor');
Route::put('/adminDoctor/{id}', [AdminController::class, 'updateDoctor'])->name('updateDoctor');
Route::delete('/adminDoctor/del/{id}',  [AdminController::class, 'destroyDoctor'])->name('delete-doctor');

Route::post('/adminArticle', [AdminController::class, 'addArticle'])->name('addArticle');
Route::put('/adminArticle/{id}', [AdminController::class, 'updateArticle'])->name('updateArticle');
Route::delete('/adminArticle/del/{id}',  [AdminController::class, 'destroyArticle'])->name('delete-article');


Route::put('/updateProfile', [ProfileController::class, 'updateprofile'])->name('updateProfile');
//404 handler
Route::fallback(function () {
    return view('404', [
        'active' => 'none'
    ]);
});