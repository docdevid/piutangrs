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
        $bendahara = Role::create(['name' => 'Bendahara']);
        $dataEntry = Role::create(['name' => 'Data Entry']);


        // permission
        Permission::create(['name' => 'show dashboard']);
        Permission::create(['name' => 'show piutang']);
        Permission::create(['name' => 'show jenis perawatan']);
        Permission::create(['name' => 'show pasien']);
        Permission::create(['name' => 'show pengaturan']);

        $bendahara->givePermissionTo('show dashboard');
        $bendahara->givePermissionTo('show piutang');
        $bendahara->givePermissionTo('show pengaturan');
        $dataEntry->givePermissionTo('show dashboard');
        $dataEntry->givePermissionTo('show piutang');
        $dataEntry->givePermissionTo('show pengaturan');
    }
}
