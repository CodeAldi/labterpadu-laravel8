<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\KategoriBerita;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::all();
        return view('back.berita.index')->with('berita',$berita);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = KategoriBerita::all();
        return view('back.berita.create')->with('kategori',$kategori);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $judul = $request->judul;
        $kategori = $request->kategori;
        $thumbnail = $request->file('thumbnail')->store('news-thumbnail','public');
        $slug = Str::slug($judul);
        $isi = $request->content;
        $singkat = Str::limit(strip_tags($isi), 100, '...');

        Berita::create([
            'judul' => $judul,
            'slug' => $slug,
            'kategori_berita_id' => $kategori,
            'singkat' =>$singkat,
            'body' => $isi,
            'thumbnail' => $thumbnail,
            'is_published' => 1,
            'is_pinned' => 1,
        ]);

        return redirect()->route('admin.berita');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $berita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $berita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $berita)
    {
        $thumbnail = $berita->thumbnail;
        // Storage::disk('public')->delete($thumbnail);
        $berita->delete();
        return redirect()->route('admin.berita');
    }
}
