<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pengembalian;
use App\Models\User;
use App\Models\Peminjaman;
use App\Models\Buku;

class PengembalianFactory extends Factory
{
    protected $model = Pengembalian::class;

    public function definition()
    {
        return [
            'catatan' => $this->faker->sentence(),
            'kondisi' => $this->faker->randomElement(['Baik', 'Rusak', 'Hilang']),
            'id_petugas' => User::factory(), // Pastikan ada user
            'id_peminjaman' => Peminjaman::factory(), // Pastikan ada peminjaman
            'id_buku' => Buku::factory(), // Pastikan ada buku
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
