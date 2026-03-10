@extends('layouts.app')

@section('content')

<h3>Edit Sekolah</h3>

<form action="{{ route('sekolah.update',$sekolah->id) }}" method="POST">

@csrf
@method('PUT')

<div class="mb-3">

<label>Yayasan</label>

<select name="yayasan_id" class="form-control">

@foreach($yayasans as $y)

<option value="{{ $y->id }}"
{{ $sekolah->yayasan_id == $y->id ? 'selected' : '' }}>

{{ $y->nama_yayasan }}

</option>

@endforeach

</select>

</div>

<div class="mb-3">

<label>Nama Sekolah</label>

<input type="text"
name="nama_sekolah"
value="{{ $sekolah->nama_sekolah }}"
class="form-control">

</div>

<div class="mb-3">

<label>Alamat</label>

<textarea name="alamat"
class="form-control">{{ $sekolah->alamat }}</textarea>

</div>

<button class="btn btn-success">
Update
</button>

</form>

@endsection
