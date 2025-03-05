@extends('layouts.app')

@section('title', 'Edit Kategori')
@section('content')
<div class="container">
    <h2>Edit kategori</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <p>ID Kategori: {{ $kategori->id }}</p>
    <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama_kategori" class="form-label">Nama kategori</label>
            <input type="text" name="nama_kategori" class="form-control" id="nama_kategori" value="{{ old('nama_kategori', $kategori->nama_kategori) }}" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" id="deskripsi" required>{{ old('deskripsi', $kategori->deskripsi) }}</textarea>
        </div>


        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('category.category') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
