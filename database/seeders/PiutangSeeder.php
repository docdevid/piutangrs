<?php

namespace Database\Seeders;

use App\Models\Piutang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PiutangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Piutang::factory()->count(3)->create();
    }
}
