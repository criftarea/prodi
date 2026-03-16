<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mmapel;

class Cmapel extends Controller
    {
    public function tampil()
    {
 $mapel = Mmapel::all();
 return view('mapel.tampil', compact('mapel'));
   }
   public function tambah()
    {
 return view('mapel.tambah');
    }

    public function simpan(request $request)
    {
        $mapel = new Mmapel();
        $mapel ->kode_mapel     =$request->kode_mapel;
        $mapel ->nama_mapel     =$request->nama_mapel;
        $mapel ->singkatan      =$request->singkatan;
        $mapel ->kelas          =$request->kelas;
        $mapel ->pengajar       =$request->pengajar;
        $mapel ->prodi          =$request->prodi;
        $mapel->save();

        return redirect()->route('mapel.tampil')->with('success', 'Data berhasil disimpan');
    }
    public function edit (string $kode_mapel)
    {
        $mapel = Mmapel::where('kode_mapel', $kode_mapel)->first();
        return view ('mapel.edit', compact('mapel'));
    }

    public function simpan_edit(request $request, string $kode_mapel)
    {
    
        $mapel = Mmapel::where('kode_mapel', $kode_mapel)->first();

        $mapel->nama_mapel     = $request->nama_mapel;
        $mapel->singkatan      = $request->singkatan;
        $mapel->kelas          = $request->kelas;
        $mapel->pengajar       = $request->pengajar;
        $mapel->prodi          = $request->prodi;
        $mapel->save();
    
        return redirect()->route('mapel.tampil')->with('success', 'Data berhasil diperbarui');
    }
    public function hapus($kode_mapel)
    {
        $mapel = Mmapel::where('kode_mapel', $kode_mapel)->first();

        $mapel->delete();
        return redirect()->route('mapel.tampil')->with('success', 'Data guru berhasil dihapus');
    }
}