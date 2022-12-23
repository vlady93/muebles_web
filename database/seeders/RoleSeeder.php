<?php

namespace Database\Seeders;

use App\Models\User;
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
        $RoleAdmin=Role::create(['name'=>'Administrador']);

        Permission::create(['name'=>'ver-categoria'])->syncRoles($RoleAdmin);
        Permission::create(['name'=>'crear-categoria'])->syncRoles($RoleAdmin);
        Permission::create(['name'=>'editar-categoria'])->syncRoles($RoleAdmin);
        
        
        Permission::create(['name'=>'ver-producto'])->syncRoles($RoleAdmin);
        Permission::create(['name'=>'crear-producto'])->syncRoles($RoleAdmin);
        Permission::create(['name'=>'editar-producto'])->syncRoles($RoleAdmin);


        Permission::create(['name'=>'ver-imagenes'])->syncRoles([$RoleAdmin]);
        Permission::create(['name'=>'crear-imagenes'])->syncRoles([$RoleAdmin]);
       
       
        $user = User::create([
            'name' => 'vlady',
            'email' => 'vlady3000hc@gmail.com',
            'password' => bcrypt('123123123')
        ]);
        $user->assignRole($RoleAdmin);
        $user = User::create([
            'name' => 'Jesus',
            'email' => 'jesus@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $user->assignRole($RoleAdmin);
    }

}
