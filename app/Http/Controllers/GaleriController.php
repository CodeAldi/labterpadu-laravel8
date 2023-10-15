<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeri = Galeri::all();
        return view('back.galeri.index')->with('galeri',$galeri);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $galeri = new Galeri();
        $verivedData = $request->validate([
            'judul' => 'required|max:255',
            'desc'  => 'required|max:255',
            'gambar' => 'required|image',
        ]);
        $extension = $request->file('gambar')->getClientOriginalExtension();
        $path = $request->file('gambar')->storeAs('galeri',date("YmdHis").'.'.$extension,'public');
        $galeri->judul = $request->judul;
        $galeri->desc  = $request->desc;
        $galeri->path= $path;
        $galeri->save();
        return redirect()->route('admin.galeri')->with('status-success','galeri berhasil di Upload');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeri = Galeri::find($id);
        $gambar = $galeri->path;
        Storage::disk('public')->delete($gambar);
        $galeri->delete();
        return redirect()->route('admin.galeri')->with('status-delete-success','galeri berhasil di Delete');
    }
}
