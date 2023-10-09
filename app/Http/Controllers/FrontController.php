<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $title = 'Beranda';
        $beritapinned  = Berita::where('is_pinned',true)->where('is_published',true)->get();
        $beritaterbaru = Berita::where('is_published',true)->take(5)->get();
        // dd($beritapinned);
        return view('front.beranda.index')
        ->with('berita_pinned',$beritapinned)
        ->with('berita_terbaru',$beritaterbaru)
        ->with('title', $title);
    }
    public function sejarah() {
        $title = 'Sejarah';
        return view('front.profile.sejarah')
        ->with('title',$title);
    }
    public function visi() {
        $title = 'Visi, Misi, dan Sejarah';
        return view('front.profile.visi')
        ->with('title',$title);
    }
    public function struktur() {
        $title = 'Struktur Organisasi';
        return view('front.profile.struktur')
        ->with('title',$title);
    }
    public function ujitarik() {
        $title = 'Uji Tarik';
        return view('front.pengujian.tarik')
        ->with('title',$title);
    }
    public function kuattekan() {
        $title = 'Uji Kuat Tekan';
        return view('front.pengujian.tekan')
        ->with('title',$title);
    }
    public function batubara() {
        $title = 'Uji Batubara';
        return view('front.pengujian.batubara')
        ->with('title',$title);
    }
    public function xrd() {
        $title = 'Uji XRD';
        return view('front.pengujian.xrd')
        ->with('title',$title);
    }
    public function kekerasanbahan() {
        $title = 'Uji Kekerasan Bahan';
        return view('front.pengujian.kekerasan')
        ->with('title',$title);
    }
    public function halal() {
        $title = 'Uji Halal';
        return view('front.pengujian.halal')
        ->with('title',$title);
    }
    public function laboratorium() {
        $title = 'Laboratorium';
        return view('front.tentangKami.laboratorium')
        ->with('title',$title);
    }
    public function fasilitas() {
        $title = 'Fasilitas';
        return view('front.tentangKami.fasilitas')
        ->with('title',$title);
    }
    public function galeri() {
        $title = 'Galeri';
        return view('front.tentangKami.galeri')
        ->with('title',$title);
    }
    public function alur() {
        $title = 'Alur Pengujian';
        return view('front.alurPengujian.index')
        ->with('title',$title);
    }
    public function hubungikami() {
        $title = 'Hubungi Kami';
        return view('front.hubungiKami.index')
        ->with('title',$title);
    }
    public function halamandownload() {
        $title = 'Halaman Download';
        return view('front.download.index')
        ->with('title',$title);
    }

    public function pindahweblogin() {
        return redirect()->away('https://siladu.unp.ac.id/console/login');
    }
    public function pindahwebregister() {
        return redirect()->away('https://siladu.unp.ac.id/console/daftar');
    }
}
