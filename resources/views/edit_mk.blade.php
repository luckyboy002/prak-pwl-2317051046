@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Edit Mata Kuliah</h2>

  <form action="{{ route('mata-kuliah.update', $mk->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label>Nama Mata Kuliah</label>
      <input type="text" name="nama_mk" value="{{ $mk->nama_mk }}" class="form-control">
    </div>

    <div class="mb-3">
      <label>SKS</label>
      <input type="number" name="sks" value="{{ $mk->sks }}" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>
@endsection
