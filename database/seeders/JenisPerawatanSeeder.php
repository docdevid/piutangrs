<?php

namespace Database\Seeders;

use App\Models\JenisPerawatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisPerawatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Adm.	Akom.	Js.Pel.	Penunj.	Obat+BHP	Js. Sarana

        JenisPerawatan::factory()->create([
            'nama' => 'Adm.',
            'biaya' => 1000,
        ]);
        JenisPerawatan::factory()->create([
            'nama' => 'Akom.',
            'biaya' => 1000,
        ]);
        JenisPerawatan::factory()->create([
            'nama' => 'Js.Pel.',
            'biaya' => 1000,
        ]);
        JenisPerawatan::factory()->create([
            'nama' => 'Penunj.',
            'biaya' => 1000,
        ]);
        JenisPerawatan::factory()->create([
            'nama' => 'Obat+BHP',
            'biaya' => 1000,
        ]);
        JenisPerawatan::factory()->create([
            'nama' => 'Js. Sarana',
            'biaya' => 1000,
        ]);
    }
}
