<?php

namespace App\Http\Controllers;

use App\Models\Yayasan;
use Illuminate\Http\Request;

class YayasanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
$yayasans = Yayasan::all();
        return view('yayasan.index', compact('yayasans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('yayasan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'nama_yayasan' => 'required',
            'alamat' => 'required'
        ]);

       Yayasan::create([
    'nama_yayasan' => $request->nama_yayasan,
    'alamat' => $request->alamat
]);

        return redirect()->route('yayasan.index')
            ->with('success','Data yayasan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Yayasan $yayasan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
         $yayasan = Yayasan::findOrFail($id);
        return view('yayasan.edit', compact('yayasan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
         $request->validate([
            'nama_yayasan' => 'required',
            'alamat' => 'required'
        ]);

        $yayasan = Yayasan::findOrFail($id);
        $yayasan->update([
    'nama_yayasan' => $request->nama_yayasan,
    'alamat' => $request->alamat
]);

        return redirect()->route('yayasan.index')
            ->with('success','Data yayasan berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
         $yayasan = Yayasan::findOrFail($id);
        $yayasan->delete();

        return redirect()->route('yayasan.index')
            ->with('success','Data yayasan berhasil dihapus');
    }
    protected $fillable = [
    'nama_yayasan',
    'alamat'
];

}
