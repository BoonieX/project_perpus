<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Peminjaman;
use App\Models\User;
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
            'id_anggota' => User::inRandomOrder()->first()->id ?? User::factory()->create()->id,
            'id_buku' => Buku::inRandomOrder()->first()->id ?? Buku::factory()->create()->id,
            'tanggal_pinjam' => $this->faker->date(),
            'tanggal_kembali' => $this->faker->optional()->date(),
            'status' => $this->faker->randomElement(['Dipinjam', 'Dikembalikan']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
