<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mguru;

class Cguru extends Controller
    {
    public function tampil()
    {
 $guru = Mguru::all();
 return view('guru.tampil', compact('guru'));
   }
   public function tambah()
    {
 return view('guru.tambah');
    }

    public function simpan(Request $request)
    {
        $guru = new Mguru();
        $guru ->nip     =$request->nip;
        $guru ->nama    =$request->nama;
        $guru ->alamat  =$request->alamat;
        $guru ->status  =$request->status;
        $guru->save();

        return redirect()->route('guru.tampil')->with('status', ['judul' => 'Berhasil', 'pesan' => 'Data berhasil disimpan', 'icon' => 'success']);
    }
    public function edit (string $nip)
    {
        $guru = Mguru::where('nip', $nip)->first();
        return view ('guru.edit', compact('guru'));
    }

    public function simpan_edit(Request $request, string $nip)
    {
    
        $guru = Mguru::where('nip', $nip)->first();

        $guru->nama     = $request->nama;
        $guru->alamat   = $request->alamat;
        $guru->status   = $request->status;
        $guru->save();
    
        return redirect()->route('guru.tampil')->with('success', 'Data berhasil diperbarui');
    }
    public function hapus($nip)
    {
        $guru = Mguru::where('nip', $nip)->first();

        $guru->delete();
        return redirect()->route('guru.tampil')->with('success', 'Data guru berhasil dihapus');
    }
}