<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAssign extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission=Permission::all();
        $srole= Role::where('name','SuperAdmin')->first();
        $srole->syncPermissions($permission);


        $apermission = Permission::whereIn('name',['insert','view'])->get();
        $arole= Role::where('name','Admin')->first();
        $arole->syncPermissions($apermission);


        $epermission = Permission::whereIn('name',['edit','view'])->get();
        $erole= Role::where('name','Employee')->first();
        $erole->syncPermissions($epermission);

        $stpermission = Permission::where('name','view')->get();
        $strole= Role::where('name','Student')->first();
        $strole->syncPermissions($stpermission);
    }
}
