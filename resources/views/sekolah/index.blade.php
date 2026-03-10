@extends('layouts.app')

@section('content')

<h3>Data Sekolah</h3>

<a href="{{ route('sekolah.create') }}" class="btn btn-primary mb-3">
Tambah Sekolah
</a>

<table class="table table-bordered">

<tr>
<th>No</th>
<th>Nama Sekolah</th>
<th>Yayasan</th>
<th>Alamat</th>
<th>Aksi</th>
</tr>

@foreach($sekolahs as $s)

<tr>

<td>{{ $loop->iteration }}</td>

<td>{{ $s->nama_sekolah }}</td>

<td>{{ $s->yayasan->nama_yayasan }}</td>

<td>{{ $s->alamat }}</td>

<td>

<a href="{{ route('sekolah.edit',$s->id) }}" class="btn btn-warning btn-sm">
Edit
</a>

<form action="{{ route('sekolah.destroy',$s->id) }}" method="POST" style="display:inline">

@csrf
@method('DELETE')

<button class="btn btn-danger btn-sm">
Hapus
</button>

</form>

</td>

</tr>

@endforeach

</table>

@endsection
