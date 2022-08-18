<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;
class CreateSuperAdminUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =User::create([
                "name" => "pintu",
                "email" =>"SuperAdmin@gmail.com",
                "password" =>bcrypt("123456")
        ]);

        $role = Role::create(['name'=>'SuperAdmin']);

        $permission = Permission::pluck('id','id')->all();

        $role->syncPermissions($permission);

        $user->assignRole([$role->id]);
    }
}
