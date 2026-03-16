@extends('layout.menu2')
	@section('konten2')
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Tambah Guru</title>
  <style>
    .btn-custom-save {
      background-color: green;
      color: white;
      width: 100%;
      margin-bottom: 10px;
    }
    .btn-custom-reset {
      background-color: blue;
      color: white;
      width: 100%;
    }
    .btn-back {
      position: absolute;
      top: 20px;
      right: 20px;
      background-color: gray;
      color: white;
      border: none;
      padding: 5px 10px;
      border-radius: 50%;
    }
    .btn-back i {
      font-size: 16px;
    }
  </style>
</head>
<body>
  <div class="container mt-5 position-relative">
    <h2>Edit Data Guru</h2>
   
<form method="POST" action="{{ route('guru.simpan_edit', $guru->nip)}}">
    @csrf 
    @method('PUT')
    <div class="form-group">
      <label for="nip">NIP</label>
    <input type="text" name="nip" class="form-control" required value="{{ old('nip', $guru->nip)}}">
    @error('nip') {{ $message }} @enderror
    </div>
    <div class="form-group">
      <label for="nama">Nama</label>
    <input type="text" name="nama" class="form-control" required value="{{ old('nama', $guru->nama)}}">
    </div>
    <div class="form-group">
      <label for="alamat">Alamat</label>
    <textarea name="alamat" class="form-control">{{ old('alamat', $guru->alamat)}}</textarea>
    </div>
    <div class="form-group">
      <label for="status">Status</label>
    <select name="status" class="form-control" required>
        <option value="">Pilih</option>
        <option value="Tetap"     {{ $guru->status == 'Tetap' ? 'selected' : '' }}>Tetap</option>
        <option value="Full Time" {{ $guru->status == 'Full Time' ? 'selected' : '' }}>Full Time</option>
        <option value="Part Time" {{ $guru->status == 'Part Time' ? 'selected' : '' }}>Part Time</option>
  </select>
  <br><br>
  <button type="submit" 
  class="btn btn-success btn-sm mb-2" title="Simpan Data">
  <i class="fa fa-check"></i> Simpan</button>
  <a href="{{ route('guru.tampil') }}" class="btn btn-primary btn-sm mb-2" title="Kembali">
    <i class="fa fa-arrow-left"></i> Kembali</a>
</form>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
@endsection