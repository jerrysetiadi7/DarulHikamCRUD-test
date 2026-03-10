<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use App\Models\Yayasan;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sekolahs = Sekolah::with('yayasan')->get();
        return view('sekolah.index', compact('sekolahs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $yayasans = Yayasan::all();
        return view('sekolah.create', compact('yayasans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'yayasan_id' => 'required',
            'nama_sekolah' => 'required',
            'alamat' => 'required'
        ]);

        Sekolah::create([
    'yayasan_id' => $request->yayasan_id,
    'nama_sekolah' => $request->nama_sekolah,
    'alamat' => $request->alamat
]);

        return redirect()->route('sekolah.index')
            ->with('success','Data sekolah berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sekolah $sekolah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $sekolah = Sekolah::findOrFail($id);
        $yayasans = Yayasan::all();

        return view('sekolah.edit', compact('sekolah','yayasans'));
    }

    /**
     * Update the specified resource in storage.
     */
     public function update(Request $request, $id)
    {
        $request->validate([
            'yayasan_id' => 'required',
            'nama_sekolah' => 'required',
            'alamat' => 'required'
        ]);

        $sekolah = Sekolah::findOrFail($id);
         $sekolah->update([
    'yayasan_id' => $request->yayasan_id,
    'nama_sekolah' => $request->nama_sekolah,
    'alamat' => $request->alamat
]);
        return redirect()->route('sekolah.index')
            ->with('success','Data sekolah berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sekolah = Sekolah::findOrFail($id);
        $sekolah->delete();

        return redirect()->route('sekolah.index')
            ->with('success','Data sekolah berhasil dihapus');
    }
}
