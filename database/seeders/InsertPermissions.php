<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class InsertPermissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = ['insert','edit','delete','view'];
        foreach($arr as $perm){
            
                $Permission=Permission::create([
                'name' => $perm,
            ]);
        }
       
    }
}
