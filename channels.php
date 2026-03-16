@extends('layout.menu')
	@section('konten')
<form method="POST" action="{{route('prodi.update', $prodi->id)}}">
    @csrf
    @method('PUT')
    kode prodi :
    <input type="text" name="kode_prodi" readonly value="{{ old('kode_prodi', $prodi->kode_prodi) }}">
    @error('kode_prodi') {{ $message }} @enderror
    <br />
    nama prodi :
    <input type="text" name="nama_prodi" required value="{{ old('nama_prodi', $prodi->nama_prodi) }}">
    <br />
    ketua prodi :
    <input type="text" name="ketua_prodi" required value="{{ old('ketua_prodi', $prodi->ketua_prodi) }}">
    <br />
    status prodi :
    <select name="status_prodi" required>
    <option value="">Pilih</option>
    <option value="A" {{ $prodi->status_prodi == 'A' ? 'selected' : '' }}>A</option>
    <option value="B" {{ $prodi->status_prodi == 'B' ? 'selected' : '' }}>B</option>
    <option value="B" {{ $prodi->status_prodi == 'C' ? 'selected' : '' }}>C</option>
    </select>
    <br />
    Mulai Aktif :
    <input type="date" name="mulai_aktif" required value="{{ old('mulai_aktif', $prodi->mulai_aktif) }}">
    <br /><br />
    <button type="submit">Simpan</button>
    <a href="{{ route('prodi.index') }}">Kembali</a>
   </form>
   @endsection