@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Daftar Mata Kuliah</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="/matakuliah/create" class="btn btn-success mb-3">Tambah Mata Kuliah</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode MK</th>
                <th>Nama MK</th>
                <th>SKS</th>
                 <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mks as $index => $mk)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $mk->kode_mk }}</td>
                <td>{{ $mk->nama_mk }}</td>
                <td>{{ $mk->sks }}</td>
                 <td>
      <a href="{{ route('mata-kuliah.edit', $mk->id) }}" class="btn btn-warning btn-sm">Edit</a>
      <form action="{{ route('mata-kuliah.destroy', $mk->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">Hapus</button>
      </form>
    </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
