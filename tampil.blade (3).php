@extends('layout.menu2')
	@section('konten2')
<br>
<h2>Data Guru</h2>
<a href="{{route('guru.tambah')}}" title="Tambah Data" 
class="btn btn-primary btn-sm mb-2">
<i class="fa fa-plus"></i> Tambah Data</a>
<table class="table table-bordered table-hover" id="example"> 
    <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
<tbody>
        @foreach ($guru as $d)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$d->nip}}</td>
        <td>{{$d->nama}}</td>
        <td>{{$d->alamat}}</td>
        <td>{{$d->status}}</td>
        <td>
            <form onsubmit="return confirm('Yakin hapus data?');" method="POST" action="{{ route('guru.hapus', $d->nip) }}">
                @csrf
                @method('DELETE')
                <a href="{{ route('guru.edit', $d->nip) }}" 
                    class="btn btn-success btn-sm mb-2" title="Edit Data">
                    <i class="fa fa-edit"></i> Edit</a>
                <button type="submit" class="btn btn-danger btn-sm mb-2" title="Hapus Data">
                    <i class="fa fa-trash"></i> Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


@if(session('status'))
	<script>
		Swal.fire({
		title: "{{session('status')['judul']}}",
		text: "{{session('status')['pesan']}}",
		icon: "{{session('status')['icon']}}"
		});
	</script>
	@endif

@endsection