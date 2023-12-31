<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\GaleriController;
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
// menu download - index
Route::get('download', [FrontController::class, 'halamandownload'])->name('front.download');
// menu download - proses download
Route::get('download/{id}', [FrontController::class, 'prosesdownload'])->name('front.download.proses');
// menu alur pelayanan
Route::get('alur', [FrontController::class, 'alur'])->name('front.alur');
// pindah halaman
Route::get('pindahlogin', [FrontController::class, 'pindahweblogin'])->name('pindahweblogin');
Route::get('pindahregister', [FrontController::class, 'pindahwebregister'])->name('pindahwebregister');
// menu berita - semua
Route::get('baca-berita/semua',[FrontController::class, 'lihatsemuaberita'])->name('front.berita.semua');
// menu berita - baca
Route::get('baca-berita/{slug}',[FrontController::class, 'bacaberita'])->name('front.berita.baca');

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
    Route::get('kategori-berita/list',[KategoriBeritaController::class, 'index'])->name('admin.kategoriberita');
    // kategori berita - create
    Route::get('kategori-berita/create', [KategoriBeritaController::class, 'create'])->name('admin.kategoriberita.create');
    // kategori berita - store
    Route::post('kategori-berita/store', [KategoriBeritaController::class, 'store'])->name('admin.kategoriberita.store');
    // kategori berita - destroy
    Route::get('kategori-berita/{id}/destory', [KategoriBeritaController::class, 'destroy'])->name('admin.kategoriberita.destroy');
    // Berita - index
    Route::get('berita/list',[BeritaController::class, 'index'])->name('admin.berita');
    // berita - create
    Route::get('berita/create', [BeritaController::class, 'create'])->name('admin.berita.create');
    // berita - store
    Route::post('berita/store', [BeritaController::class, 'store'])->name('admin.berita.store');
    // berita - destroy
    Route::get('berita/{berita}',[BeritaController::class, 'destroy'])->name('admin.berita.destroy');
    // berita - pin
    Route::get('berita/{id}/pin',[BeritaController::class, 'pinberita'])->name('admin.berita.pinberita');
    // berita - unpin
    Route::get('berita/{id}/unpin',[BeritaController::class, 'unpinberita'])->name('admin.berita.unpinberita');
    // dokumen - index
    Route::get('dokumen/list',[DokumenController::class, 'index'])->name('admin.dokumen');
    // dokumen - create
    Route::get('dokumen/create',[DokumenController::class, 'create'])->name('admin.dokumen.create');
    // dokumen - store
    Route::post('dokumen/store',[DokumenController::class, 'store'])->name('admin.dokumen.store');
    // dokumen - show
    Route::post('dokumen/show', [DokumenController::class, 'show'])->name('admin.dokumen.show');
    // dokumen - destroy
    Route::get('dokumen/{id}', [DokumenController::class, 'destroy'])->name('admin.dokumen.destroy');
    // galeri - index
    Route::get('galeri/list', [GaleriController::class, 'index'])->name('admin.galeri');
    // galeri - create
    Route::get('galeri/create', [GaleriController::class, 'create'])->name('admin.galeri.create');
    // galeri - store
    Route::post('galeri/store',[GaleriController::class, 'store'])->name('admin.galeri.store');
    // galeri - destroy
    Route::get('galeri/{id}/delete',[GaleriController::class, 'destroy'])->name('admin.galeri.destroy');
});
