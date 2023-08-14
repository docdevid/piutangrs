<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        #Create role
        $this->call([
            RolesAndPermissionSeeder::class,
            UserSeeder::class,
            PasienSeeder::class,
            JenisPerawatanSeeder::class,
            PiutangSeeder::class
        ]);
    }
}
