<?php

namespace Database\Seeders;
use App\Models\Buku;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Buku::create([
            'judul' => 'Laskar Pelangi',
            'pengarang' => 'Andrea Hirata',
            'penerbit' => 'Bentang Pustaka',
            'tahun_terbit' => 2005,
            'isbn' => '9789791227780',
            'jumlah_halaman' => 529,
            'kategori' => 'Fiksi',
            'stok' => 10,
        ]);
    }
}
