<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Prosalud']);

        Permission::create(['name' => 'users.index',
                            'description' => 'Ver listado de usuarios'])->syncRoles([$role1]);
        Permission::create(['name' => 'users.edit',
                            'description' => 'Asignar rol'])->syncRoles([$role1]);

        Permission::create(['name' => 'roles.index',
                            'description' => 'Ver listado de roles'])->syncRoles([$role1]);
        Permission::create(['name' => 'roles.create',
                            'description' => 'Crear role'])->syncRoles([$role1]);
        Permission::create(['name' => 'roles.edit',
                            'description' => 'Editar role'])->syncRoles([$role1]);
        Permission::create(['name' => 'roles.destroy',
                            'description' => 'Eliminar role'])->syncRoles([$role1]);

        Permission::create(['name' => 'pacientes.index',
                            'description' => 'Ver Listado de pacientes'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'pacientes.create',
                            'description' => 'Registrar nuevo paciente'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'pacientes.edit',
                            'description' => 'Editar datos del paciente'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'pacientes.show',
                            'description' => 'Ver datos del paciente'])->syncRoles([$role1,$role2]);
    }
}
