<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@app.com',
        ]);
        User::find(1)->assignRole('Super Admin');

        User::factory()->count(1)->create(['name' => 'Bendahara', 'email' => 'bendahara@app.com'])->each(fn ($u) => $u->assignRole('Bendahara'));

        User::factory()->count(1)->create(['name' => 'Data Entry', 'email' => 'dataentry@app.com'])->each(fn ($u) => $u->assignRole('Data Entry'));
        User::factory()->count(2)->create()->each(fn ($u) => $u->assignRole('Data Entry'));
    }
}
