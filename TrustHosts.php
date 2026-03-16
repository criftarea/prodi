<?php

namespace App\Http\Controllers;

use App\Models\Mprodi;
use Illuminate\Http\Request;

class Cprodi extends Controller
{
    public function index()
    {
        $prodi = Mprodi::get();
        return view('prodi.index', compact('prodi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('prodi.form_tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'kode_prodi' => 'required|string|max:10',
        //     'nama_prodi' => 'required|string|max:255',
        //     'ketua_prodi' => 'required|string|max:255',
        //     'status_prodi' => 'required|in:Aktif,Tidak Aktif',
        //     'mulai_aktif' => 'required|date',
        //  ]);   
        Mprodi::create([
            'kode_prodi'        => $request->kode_prodi,
            'nama_prodi'        => $request->nama_prodi,
            'ketua_prodi'       => $request->ketua_prodi,
            'status_prodi'      => $request->status_prodi,
            'mulai_aktif'       => $request->mulai_aktif,
        ]);
        return redirect()->route('prodi.index')->with('success', 'Data prodi berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mprodi $mprodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $prodi = Mprodi::findOrFail($id);
        return view('prodi.edit', compact('prodi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $prodi = Mprodi::findOrFail($id);
$prodi->update([
'kode_prodi' => $request->kode_prodi,
'nama_prodi'=> $request->nama_prodi,
'ketua_prodi' => $request->ketua_prodi,
'status_prodi' => $request->status_prodi,
'mulai_aktif' => $request->mulai_aktif,
]);
return redirect()->route('prodi.index')->with('success', 'Data prodi berhasil 
diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $prodi = Mprodi::findOrFail($id);
        $prodi->delete();
        return redirect()->route('prodi.index')->with('success', 'Data siswa berhasil dihapus');
    }
}
