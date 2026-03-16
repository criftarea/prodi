@extends('layout.menu')
	@section('konten')
  
<form method="POST" action="{{ route('mapel.simpan_edit', $mapel->kode_mapel)}}">
        @csrf 
        @method('PUT')
        Kode Mapel:
        <input type="text" name="kode_mapel" required value="{{ old('kode_mapel', $mapel->kode_mapel)}}">
        @error('kode_mapel') {{ $message }} @enderror
        <br>
        Nama Mapel:
        <input type="text" name="nama_mapel" required value="{{ old('nama_mapel', $mapel->nama_mapel)}}">
        <br>
        Singkatan:
        <input type="text" name="singkatan" required value="{{ old('singkatan', $mapel->singkatan)}}">
        <br>
        Kelas:
        <select name="kelas" required>
            <option value="">Pilih</option>
            <option value="X" {{ $mapel->kelas == 'Tetap' ? 'selected' : '' }}>X</option>
            <option value="XI" {{ $mapel->kelas == 'Tetap' ? 'selected' : '' }}>XI</option>
            <option value="XII" {{ $mapel->kelas == 'Tetap' ? 'selected' : '' }}>XII</option>
        </select>
        <br>
        Pengajar:
        <input type="text" name="pengajar" required value="{{ old('pengajar', $mapel->pengajar)}}">
        <br>
        Prodi:
        <select name="prodi" required>
            <option value="">Pilih</option>
            <option value="TJA" {{ $mapel->prodi == 'Tetap' ? 'selected' : '' }}>TJA</option>
            <option value="TKJ" {{ $mapel->prodi == 'Tetap' ? 'selected' : '' }}>TKJ</option>
            <option value="RPL" {{ $mapel->prodi == 'Tetap' ? 'selected' : '' }}>RPL</option>
            <option value="DKV" {{ $mapel->prodi == 'Tetap' ? 'selected' : '' }}>DKV</option>
            <option value="ANM" {{ $mapel->prodi == 'Tetap' ? 'selected' : '' }}>ANM</option>
        </select>
        <br> <br>
      <button type="submit">Simpan</button>
      <a href="{{ route('mapel.tampil') }}">Kembali</a>
    </form>
    @endsection