<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KategoriBeritaController;

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

// menu beranda
Route::get('/', [FrontController::class, 'index'])->name('beranda');
// menu profile
Route::get('/profile/sejarah', [FrontController::class, 'sejarah'])->name('profile.sejarah');
Route::get('/profile/visi-misi-tujuan', [FrontController::class, 'visi'])->name('profile.visi');
Route::get('/profile/struktur-organisasi', [FrontController::class, 'struktur'])->name('profile.struktur');
// menu informasi pengujian
Route::get('/informasi-pengujian/pengujian-tarik', [FrontController::class, 'ujitarik'])->name('informasiPengujian.tarik');
Route::get('/informasi-pengujian/kuat-tekan', [FrontController::class, 'kuattekan'])->name('informasiPengujian.tekan');
Route::get('/informasi-pengujian/batu-bara', [FrontController::class, 'batubara'])->name('informasiPengujian.batubara');
Route::get('/informasi-pengujian/xrd', [FrontController::class, 'xrd'])->name('informasiPengujian.xrd');
Route::get('/informasi-pengujian/kekerasan-bahan', [FrontController::class, 'kekerasanbahan'])->name('informasiPengujian.kekerasan');
Route::get('/informasi-pengujian/halal', [FrontController::class, 'halal'])->name('informasiPengujian.halal');
// menu tentang kami
Route::get('/tentang-kami/laboratorium', [FrontController::class, 'laboratorium'])->name('tentangKami.laboratorium');
Route::get('/tentang-kami/fasilitas', [FrontController::class, 'fasilitas'])->name('tentangKami.fasilitas');
Route::get('/tentang-kami/galeri', [FrontController::class, 'galeri'])->name('tentangKami.galeri');
// menu hubungi kami
Route::get('hubungi-kami', [FrontController::class, 'hubungikami'])->name('hubungiKami');
// menu download
Route::get('download', [FrontController::class, 'halamandownload'])->name('front.download');
// menu alur pelayanan
Route::get('alur', [FrontController::class, 'alur'])->name('front.alur');
// pindah halaman
Route::get('pindahlogin', [FrontController::class, 'pindahLogin'])->name('pindahweblogin');

Route::middleware('guest')->group(function(){
    // menu login
    Route::get('login',[AuthenticationController::class, 'login'])->name('login');
    // attemp login handler
    Route::post('authenticate',[AuthenticationController::class, 'authenticate'])->name('authenticate');
});

Route::middleware('auth')->group(function(){
    // logout
    Route::get('logout',[AuthenticationController::class, 'logout'])->name('logout');
    // Home
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('admin.home');
    // Kategori berita - index
    Route::get('kategori-berita',[KategoriBeritaController::class, 'index'])->name('admin.kategoriberita');
    // kategori berita - create
    Route::get('kategori-berita/create', [KategoriBeritaController::class, 'create'])->name('admin.kategoriberita.create');
    // kategori berita - store
    Route::post('kategori-berita/store', [KategoriBeritaController::class, 'store'])->name('admin.kategoriberita.store');
    // Berita - index
    Route::get('berita',[BeritaController::class, 'index'])->name('admin.berita');
});
