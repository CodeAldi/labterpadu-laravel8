<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Dokumen;
use App\Models\Galeri;
use App\Models\KategoriBerita;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard (){
        $kategori = KategoriBerita::count();
        $berita   = Berita::count();
        $galeri   = Galeri::count();
        $dokumen  = Dokumen::count();
        return view('back.dashboard.index')
        ->with('kategori',$kategori)
        ->with('berita',$berita)
        ->with('galeri',$galeri)
        ->with('dokumen',$dokumen);
    }
}
