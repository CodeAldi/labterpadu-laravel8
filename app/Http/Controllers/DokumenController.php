<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dokumen = Dokumen::all();
        return view('back.dokumen.index')
        ->with('dokumen',$dokumen);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.dokumen.create');
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
            'judul' => 'required|max:255',
            'dokumen' => 'mimes:doc,docx,ppt,pdf|max:51200'
        ]);
        $judul = $validatedData['judul'];
        $path  = $request->file('dokumen')->store('dokumen','public');
        $extension = $request->file('dokumen')->extension();
        $size = Storage::disk('public')->size($path);
        // dd($path,$extension,$size);
        $dokumen = new Dokumen;
        $dokumen->judul = $judul;
        $dokumen->path  = $path;
        $dokumen->extension = $extension;
        $dokumen->size  = $size;
        $dokumen->save();
        return redirect()->route('admin.dokumen');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $data = Dokumen::find($request->id);
        return response()->file(storage_path('app/public/'.$data->path));
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
        $data = Dokumen::find($id);
        $path = $data->path;
        Storage::disk('public')->delete($path);
        $data->delete();
        return redirect()->route('admin.dokumen');
    }
}
