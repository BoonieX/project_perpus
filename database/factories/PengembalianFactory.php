<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pengembalian;
use App\Models\Peminjaman;
use App\Models\Buku;
use App\Models\Petugas;

class PengembalianFactory extends Factory
{
    protected $model = Pengembalian::class;

    public function definition()
    {
        return [
            'catatan' => $this->faker->sentence(),
            'kondisi' => $this->faker->randomElement(['Baik', 'Rusak', 'Hilang']),
            'id_petugas' => Petugas::all()->random()->id, // Pastikan ada user
            'id_peminjaman' => Peminjaman::all()->random()->id, // Pastikan ada peminjaman
            'id_buku' => Buku::all()->random()->id, // Pastikan ada buku
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
