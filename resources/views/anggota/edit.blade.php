@extends('layouts.app')

@section('title', 'Edit Anggota')
@section('content')
<div class="container">
    <h2>Edit Anggota</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <p>ID Anggota: {{ $anggota->id }}</p>
    <form action="{{ route('anggota.update', $anggota->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" value="{{ old('nama', $anggota->nama) }}" required>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control" id="alamat" required>{{ old('alamat', $anggota->alamat) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="no_telp" class="form-label">No telepon</label>
            <textarea name="no_telp" class="form-control" id="no_telp" required>{{ old('no_telp', $anggota->no_telp) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('anggota.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
