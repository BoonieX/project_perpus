<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pengembalian;

class PengembalianSeeder extends Seeder
{
    public function run()
    {
        Pengembalian::factory()->count(10)->create(); // Buat 10 data dummy
    }
}
