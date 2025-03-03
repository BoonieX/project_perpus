<?php

// app/Models/Buku.php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';

    protected $primaryKey = 'id_buku';
    protected $fillable = ['judul', 'pengarang', 'penerbit', 'tahun_terbit', 'isbn', 'jumlah_halaman', 'kategori', 'stok'];

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class, 'id_buku');
    }
}
