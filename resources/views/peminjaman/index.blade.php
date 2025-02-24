@extends('layouts.main')

@section('title', 'Daftar Peminjaman')

@section('content')

<div class="container mt-5">
    <h2>Data Peminjaman</h2>
    <a href="{{ route('peminjaman.create') }}" class="btn btn-primary mb-3">Tambah Peminjaman</a>
    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>ID Anggota</th>
                <th>ID Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($peminjaman as $data)
            <tr>
                <td>{{ $data->id_peminjaman }}</td>
                <td>{{ $data->id_anggota }}</td>
                <td>{{ $data->id_buku }}</td>
                <td>{{ $data->tanggal_pinjam }}</td>
                <td>{{ $data->tanggal_kembali }}</td>
                <td>{{ $data->status }}</td>
                <td>
                    <a href="{{ route('peminjaman.edit', $data->id_peminjaman) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('peminjaman.destroy', $data->id_peminjaman) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
