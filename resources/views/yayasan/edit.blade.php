@extends('layouts.app')

@section('content')

<h3>Edit Yayasan</h3>

<form action="{{ route('yayasan.update',$yayasan->id) }}" method="POST">

@csrf
@method('PUT')

<div class="mb-3">
<label>Nama Yayasan</label>
<input type="text" name="nama_yayasan"
value="{{ $yayasan->nama_yayasan }}"
class="form-control">
</div>

<div class="mb-3">
<label>Alamat</label>
<textarea name="alamat"
class="form-control">{{ $yayasan->alamat }}</textarea>
</div>

<button class="btn btn-success">Update</button>

</form>

@endsection
