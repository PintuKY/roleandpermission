<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;


class InsertRoll extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    

    public function run()
    {

        // $arr = ['SuperAdmin','Admin','Employee','Student'];
        $arr = ['SuperAdmin'];
        foreach($arr as $roll){

            Role::create(['name' => $roll]);
        }       
    }
}
