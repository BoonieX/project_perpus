<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

    class Peminjaman extends Model
    {
        
    use HasFactory;

    protected $table = 'peminjaman'; // Pastikan sesuai dengan nama tabel di database
    protected $primaryKey = 'id_peminjaman';
    public $incrementing = false; // Jika id_peminjaman bukan auto-increment
    protected $keyType = 'string'; // Ubah ke 'int' jika id_peminjaman adalah angka
    public $timestamps = true; // Pastikan timestamps digunakan (default true)
        protected $fillable = ['id_anggota', 'id_buku', 'tanggal_pinjam', 'tanggal_kembali', 'status'];

        // public function denda()
        // {
        //     return $this->hasOne(Denda::class, 'id_peminjaman');
        // }
    }
