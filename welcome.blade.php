@extends('layout.menu2')
	@section('konten2')
<br><div>
<a href="{{route('mapel.tambah')}}" class="btn btn-primary btn-sm">Tambah Data</a>
<br><br>
<table class="table table-bordered table-hover"> 
    <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>Kode Mata Pelajaran</th>
            <th>Nama Mata Pelajaran</th>
            <th>Singkatan</th>
            <th>Kelas</th>
            <th>Pengajar</th>
            <th>Prodi</th>
            <th>Aksi</th>
        </tr>
    </thead>
<tbody>
        @foreach ($mapel as $d)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$d->kode_mapel}}</td>
        <td>{{$d->nama_mapel}}</td>
        <td>{{$d->singkatan}}</td>
        <td>{{$d->kelas}}</td>
        <td>{{$d->pengajar}}</td>
        <td>{{$d->prodi}}</td>
        <td>
            <form onsubmit="return confirm('Yakin hapus data?');" method="POST" action="{{ route('mapel.hapus', $d->kode_mapel) }}">
                @csrf
                @method('DELETE')
                <a href="{{ route('mapel.edit', $d->kode_mapel) }}" class="btn btn-success btn-sm">Edit</a>
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