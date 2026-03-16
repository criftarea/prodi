<?php

namespace App\Http\Controllers;

use App\Models\Msiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Csiswa extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = DB::table('siswa')
        ->leftJoin('prodi', 'siswa.prodi', '=', 'prodi.kode_prodi')
        ->select('siswa.*', 'prodi.nama_prodi', 'prodi.ketua_prodi')
        ->get();

        return view('siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodi = DB :: table('prodi')->where('status_prodi', 'Aktif')->get();
        return view('siswa.form_tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'nis' => 'required|string|max:10|unique:siswa,nis',
        //     'nama' => 'required|string|max:255',
        //     'alamat' => 'required|string|max:255',       
        //     'tanggal_lahir' => 'required|date',
        //     'jk' => 'required|in:Laki-laki,Perempuan',
        //     ]);           

        Msiswa::create([
            'nis'           => $request->nis,
            'nama'          => $request->nama,
            'alamat'        => $request->alamat,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jk'            => $request->jk,
            'prodi'         => $request->prodi,
        ]);
        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Msiswa $msiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $siswa = Msiswa::findOrFail($id);
        $prodi = DB::table('prodi')->where('status_prodi', 'Aktif')->get();
        return view('siswa.ubah', compact('siswa'));
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $prodi = Msiswa::findOrFail($id);
            $prodi->update([
            'nis' => $request->nis,
            'nama'=> $request->nama,
            'alamat' => $request->alamat,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jk' => $request->jk,
            'prodi' => $request->prodi,
        ]);
        return redirect()->route('siswa.index')->with('success', 'Data prodi berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $siswa = Msiswa::findOrFail($id);
        $siswa->delete();
        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil dihapus');
    }
}
