<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Anggota;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Anggota::factory(10)->create([
        ]);
        $this->call([
            PengembalianSeeder::class,
        ]);

        $this->call([
            PeminjamanSeeder::class,
        ]);
    }
}
