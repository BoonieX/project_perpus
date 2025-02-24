<?php

namespace Database\Seeders;
use App\Models\Anggota;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnggotaSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Anggota::create([
            'nama'=> 'Fiqo',
            'alamat'=> 'Klabang',
            'no_telp'=> '082334678958',
        ]);
    }
}