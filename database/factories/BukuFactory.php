<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Buku;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buku>
 */
class BukuFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Buku::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'judul' => $this->faker->sentence(3),
            'pengarang' => $this->faker->name(),
            'penerbit' => $this->faker->company(),
            'tahun_terbit' => $this->faker->year(),
            'isbn' => $this->faker->unique()->isbn13(),
            'jumlah_halaman' => $this->faker->numberBetween(100, 1000),
            'kategori' => $this->faker->word(),
            'stok' => $this->faker->numberBetween(1, 50),
        ];
    }
}