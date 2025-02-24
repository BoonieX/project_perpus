@extends('layouts.app')

@section('title', 'Tambah Peminjaman')

@section('content')
<div class="container mt-5">
    <h2>Tambah Peminjaman</h2>
    <form action="{{ route('peminjaman.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="id_anggota" class="form-label">ID Anggota</label>
            <input type="number" class="form-control" id="id_anggota" name="id_anggota" required>
        </div>
        <div class="mb-3">
            <label for="id_buku" class="form-label">ID Buku</label>
            <input type="number" class="form-control" id="id_buku" name="id_buku" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_pinjam" class="form-label">Tanggal Pinjam</label>
            <input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_kembali" class="form-label">Tanggal Kembali</label>
            <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="Dipinjam">Dipinjam</option>
                <option value="Dikembalikan">Dikembalikan</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('peminjaman.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
