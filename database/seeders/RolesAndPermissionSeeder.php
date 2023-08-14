<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // role
        $superAdmin = Role::create(['name' => 'Super Admin']);
        $superAdmin = Role::create(['name' => 'Bendahara']);
        $superAdmin = Role::create(['name' => 'Data Entry']);


        // permission
        Permission::create(['name' => 'show dashboard']);
        Permission::create(['name' => 'show piutang']);
        Permission::create(['name' => 'show jenis perawatan']);
        Permission::create(['name' => 'show pasien']);
        Permission::create(['name' => 'show pengaturan']);
    }
}
