@extends('layouts.app')

@section('content')

<h3>Tambah Sekolah</h3>

<form action="{{ route('sekolah.store') }}" method="POST">

@csrf

<div class="mb-3">

<label>Yayasan</label>

<select name="yayasan_id" class="form-control">

<option value="">Pilih Yayasan</option>

@foreach($yayasans as $y)

<option value="{{ $y->id }}">
{{ $y->nama_yayasan }}
</option>

@endforeach

</select>

</div>

<div class="mb-3">

<label>Nama Sekolah</label>

<input type="text" name="nama_sekolah" class="form-control">

</div>

<div class="mb-3">

<label>Alamat</label>

<textarea name="alamat" class="form-control"></textarea>

</div>

<button class="btn btn-success">
Simpan
</button>

</form>

@endsection
