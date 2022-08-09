<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\TipeController;
use App\Http\Controllers\HargaController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\MasterBarangController;
use App\Http\Controllers\MasterPelangganController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('welcomepage');
});

Route::get('/tentang-kami', function () {
    return view('tentangkami');
});

Route::get('/hubungi-kami', function () {
    return view('hubungikami');
});

Route::get('/karir', function () {
    return view('karir');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/cekresi', function () {
    return view('cekresi');
});

Route::get('/harga', [\App\Http\Controllers\PricingController::class, 'index']);
Route::post('/harga/data', [\App\Http\Controllers\PricingController::class, 'data']);

Route::get('/detail-berita', function () {
    return view('detailberita');
});


Route::get('/layanan', function () {
    return view('layanan');
});

Route::get('/admin', function () {
    return view('login.user');
});


Route::get('/admin/user', function () {
    return view('admin.user');
});

Route::match(['post', 'get'], '/login-admin', [\App\Http\Controllers\Admin\AuthController::class, 'login']);
Route::get( '/logout', [\App\Http\Controllers\Admin\AuthController::class, 'logout']);
Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index']);

Route::group(['prefix' => '/province'], function () {
    Route::get('/', [\App\Http\Controllers\Admin\ProvinceController::class, 'index']);
    Route::match(['post', 'get'],'/store', [\App\Http\Controllers\Admin\ProvinceController::class, 'store']);
    Route::match(['post', 'get'],'/{id}/patch', [\App\Http\Controllers\Admin\ProvinceController::class, 'patch']);
    Route::post('/create', [\App\Http\Controllers\Admin\CityController::class, 'create']);
    Route::get('/data', [\App\Http\Controllers\Admin\CityController::class, 'data']);
});

Route::group(['prefix' => '/city'], function () {
    Route::get('/', [\App\Http\Controllers\Admin\CityController::class, 'index']);
    Route::post('/create', [\App\Http\Controllers\Admin\CityController::class, 'create']);
    Route::get('/data', [\App\Http\Controllers\Admin\CityController::class, 'data']);
});

Route::group(['prefix' => '/platform'], function () {
    Route::get('/', [\App\Http\Controllers\Admin\PlatformController::class, 'index']);
    Route::match(['post', 'get'],'/store', [\App\Http\Controllers\Admin\PlatformController::class, 'store']);
    Route::match(['post', 'get'],'/{id}/patch', [\App\Http\Controllers\Admin\PlatformController::class, 'patch']);
    Route::post('/create', [\App\Http\Controllers\Admin\PlatformController::class, 'create']);
    Route::get('/data', [\App\Http\Controllers\Admin\PlatformController::class, 'data']);
    Route::post('/delete', [\App\Http\Controllers\Admin\PlatformController::class, 'destroy']);
});
Route::group(['prefix' => '/pricing'], function () {
    Route::get('/', [\App\Http\Controllers\Admin\PricingController::class, 'index']);
    Route::match(['post', 'get'],'/store', [\App\Http\Controllers\Admin\PricingController::class, 'store']);
    Route::match(['post', 'get'],'/{id}/patch', [\App\Http\Controllers\Admin\PricingController::class, 'patch']);
    Route::post('/create', [\App\Http\Controllers\Admin\PricingController::class, 'create']);
    Route::get('/data', [\App\Http\Controllers\Admin\PricingController::class, 'data']);
});

Route::group(['prefix' => '/article'], function () {
    Route::get('/', [\App\Http\Controllers\Admin\ArticleController::class, 'index']);
    Route::match(['post', 'get'],'/store', [\App\Http\Controllers\Admin\ArticleController::class, 'store']);
    Route::match(['post', 'get'],'/{id}/patch', [\App\Http\Controllers\Admin\ArticleController::class, 'patch']);
    Route::post('/create', [\App\Http\Controllers\Admin\ArticleController::class, 'create']);
    Route::get('/data', [\App\Http\Controllers\Admin\ArticleController::class, 'data']);
});

//Route::get('/admin', [UserController::class, 'index']);
//Route::get('/admin/beranda', [BerandaController::class, 'index']);
//Route::get('/admin/user', [UserController::class, 'index']);
//Route::get('/admin/tipe', [TipeController::class, 'index']);
//Route::get('/admin/kota', [KotaController::class, 'index']);
//Route::get('/admin/harga', [HargaController::class, 'index']);
//Route::get('/admin/klinik', [KlinikController::class, 'index']);
//Route::get('/admin/barang', [BarangController::class, 'index']);
//Route::get('/admin/transaksi', [TransaksiController::class, 'index']);
//Route::get('/admin/transaksi/cetak/{id}', [TransaksiController::class, 'cetakLaporan']);
//Route::get('/admin/laporanpesanan', [LaporanPesananController::class, 'index']);
//Route::get('/admin/masterbarang', [MasterBarangController::class, 'index']);
//Route::get('/admin/masterpelanggan', [MasterPelangganController::class, 'index']);
//
//Route::get('/login', [LoginController::class, 'index']);
//Route::get('/daftar', [DaftarController::class, 'index']);
//Route::post('/daftar', [DaftarController::class, 'store']);
