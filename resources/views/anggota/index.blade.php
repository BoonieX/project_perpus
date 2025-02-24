@extends('layouts.app')

@section('title', 'Daftar Anggota')

@section('content')
<div class="container mt-4">
    <h2 class="mb-3">Data Anggota</h2>
    <a href="{{ route('anggota.create') }}" class="btn btn-primary mb-3">Tambah Anggota</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No. Telp</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($anggota as $index => $a)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $a->nama }}</td>
                <td>{{ $a->alamat }}</td>
                <td>{{ $a->no_telp }}</td>
                <td>{{ $a->email }}</td>
                <td>
                    <a href="{{ route('anggota.edit', $a->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('anggota.destroy', $a->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
