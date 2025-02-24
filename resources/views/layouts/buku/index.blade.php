<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    <table border="1">
        <tr>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Stok</th>
        </tr>
        @foreach($buku as $b)
        <tr>
            <td>{{ $b->judul }}</td>
            <td>{{ $b->pengarang }}</td>
            <td>{{ $b->penerbit }}</td>
            <td>{{ $b->tahun_terbit }}</td>
            <td>{{ $b->stok }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>