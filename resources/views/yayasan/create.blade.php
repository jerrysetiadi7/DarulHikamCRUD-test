@extends('layouts.app')

@section('content')

<h3>Tambah Yayasan</h3>

<form action="{{ route('yayasan.store') }}" method="POST">

@csrf

<div class="mb-3">
<label>Nama Yayasan</label>
<input type="text" name="nama_yayasan" class="form-control">
</div>

<div class="mb-3">
<label>Alamat</label>
<textarea name="alamat" class="form-control"></textarea>
</div>

<button class="btn btn-success">Simpan</button>

</form>

@endsection
