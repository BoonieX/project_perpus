@extends('layouts.main')
@section('isi')
<body>
    <div class="container mt-5">
        <h2>Daftar Kategori Buku</h2>
        <a href="#" class="btn btn-primary mb-3">Tambah Kategori</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Fiksi</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Edit</a>
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Non-Fiksi</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Edit</a>
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="container mt-5">
        <h2>Tambah Kategori Buku</h2>
        <form>
            <div class="mb-3">
                <label for="nama_kategori" class="form-label">Nama Kategori</label>
                <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
</body>

@endsection