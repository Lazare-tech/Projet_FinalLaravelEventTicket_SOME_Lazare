<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     //
     static $roles=[
        'utilisateur',
        'agence',
    ];
    public function run()
    {
        
        foreach(self::$roles as $role){
            DB::table('roles')->insert([
                'nom' => $role
            ]);
        }
    }
}
