@extends('layout.menu2')
	@section('konten2')

<br>
<a href="{{ route('prodi.create') }}" class="btn btn-primary btn-sm" title="Tambah Data Prodi">Tambah Data</a>
<br><br>
<table class="table table-bordered table-hover"> 
    <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>Kode Prodi</th>
            <th>Nama Prodi</th>
            <th>Ketua Prodi</th>
            <th>Status Prodi</th>
            <th>Mulai Aktif</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($prodi as $p)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$p->kode_prodi}}</td>
            <td>{{$p->nama_prodi}}</td>
            <td>{{$p->ketua_prodi}}</td>
            <td>{{$p->status_prodi}}</td>
            <td>{{$p->mulai_aktif}}</td>
            <td>
                <form onsubmit="return confirm('Yakin hapus data?');" method="POST" action="{{
                    route('prodi.destroy', $p->id) }}">
                     @csrf
                     @method('DELETE')
                     <a href="{{ route('prodi.edit', $p->id) }}" class="btn btn-success btn-sm">Edit</a>
                     <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@endsection