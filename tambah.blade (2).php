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
    <h2>Tambah Data Guru</h2>
    <a href="{{ route('guru.tampil')}}" class="btn-back" title="Kembali">
      <i class="fas fa-arrow-left"></i> KEMBALI</a>
    </a>
<form method="POST" action="{{ route('guru.simpan')}}">
    @csrf 
    <div class="form-group">
    <label for="nip">NIP</label>
    <input type="text" class="form-control" id="nip" name="nip" required>
    </div>
    <div class="form-group">
      <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
    <div class="form-group">
      <label for="alamat">Alamat</label>
      <input type="text" class="form-control" id="alamat" name="alamat" required>
    </div>
    <div class="form-group">
      <label for="status">Status</label>
    <select class="form-control" id="status" name="status" required>
        <option value="">Pilih</option>
        <option value="Tetap">Tetap</option>
        <option value="Full Time">Full Time</option>
        <option value="Part Time">Part Time</option>
  </select>
  </div>
  <button type="submit" title="Simpan Data"
  class="btn btn-success btn-sm mb-2">
  <i class="fa fa-check"></i> Simpan</button>
  <button type="reset"  title="Reset Data"
  class="btn btn-danger btn-sm mb-2">
  <i class="fa fa-trash"></i> Reset</button>
    </form>
  </div>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
@endsection