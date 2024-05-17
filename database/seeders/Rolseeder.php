<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class Rolseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'Admin']);
       $role2 = Role::create(['name' => 'Usuario']);

       Permission::create(['name' => 'principal'])->syncRoles([$role1, $role2]);
       Permission::create(['name' => 'usuario.index'])->assignRole($role1);
       Permission::create(['name' => 'usuario.create'])->assignRole($role1);
       Permission::create(['name' => 'usuario.edit'])->assignRole($role1);
       Permission::create(['name' => 'usuario.destroy'])->assignRole($role1);
       Permission::create(['name' => 'primerosauxilios'])->syncRoles([$role1, $role2]);
    }

}
