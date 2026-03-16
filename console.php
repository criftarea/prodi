@extends('layout.menu')
	@section('konten')
Form Tambah Data
<form method="POST" action="{{route('prodi.store')}}">
    @csrf
Kode Prodi :
<input type="text" name="kode_prodi" required>
<br>
Nama Prodi :
<input type="text" name="nama_prodi" required>
<br>
Ketua Prodi :
<input type="text" name="ketua_prodi" required>
<br>
Status Prodi :
<select name="status_prodi" required>
    <option value="">Pilih</option>
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="C">C</option>
</select>
<br>
Mulai Aktif :
<input type="date" name="mulai_aktif" required>
<br>
<button type="submit">Simpan Data</button>
<a href="{{ route('prodi.index')}}">Kembali</a>
</form> 
@endsection