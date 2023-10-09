<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\KategoriBerita;

class KategoriBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = KategoriBerita::all();
        foreach ($kategori as $key => $value) {
            $jumlah[$value['id']] = Berita::where('kategori_berita_id', $value['id'])->count();
        }
        // dd($kategori,$jumlah);
        return view('back.kategoriberita.index')
        ->with('kategori',$kategori)
        ->with('jumlah',$jumlah);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.kategoriberita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|unique:App\Models\KategoriBerita,nama|max:50'
        ]);
        $nama = $request->nama;
        $slug = Str::slug($nama);
        KategoriBerita::create([
            'nama' => $nama,
            'slug' => $slug
        ]);
        // dd($nama,$slug);
        return redirect()->route('admin.kategoriberita')->with('status-success','berhasil membuat kategori baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KategoriBerita  $kategoriBerita
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriBerita $kategoriBerita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KategoriBerita  $kategoriBerita
     * @return \Illuminate\Http\Response
     */
    public function edit(KategoriBerita $kategoriBerita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KategoriBerita  $kategoriBerita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KategoriBerita $kategoriBerita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KategoriBerita  $kategoriBerita
     * @return \Illuminate\Http\Response
     */
    public function destroy(KategoriBerita $kategoriBerita)
    {
        //
    }
}
