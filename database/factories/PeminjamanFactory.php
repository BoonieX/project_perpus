<?php

namespace Database\Factories;

use App\Models\Anggota;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Peminjaman;
use App\Models\Buku;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Peminjaman>
 */
class PeminjamanFactory extends Factory
{
    protected $model = Peminjaman::class;

    public function definition()
    {
        return [
            'id_anggota' => Anggota::all()->random()->id,
            'id_buku' => Buku::all()->random()->id,
            'tanggal_pinjam' => $this->faker->date(),
            'tanggal_kembali' => $this->faker->optional()->date(),
            'status' => $this->faker->randomElement(['Dipinjam', 'Dikembalikan']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
