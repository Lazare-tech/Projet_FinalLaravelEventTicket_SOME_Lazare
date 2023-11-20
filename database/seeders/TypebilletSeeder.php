<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypebilletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    static $type_billet=[
        'SOLO',
        'VIP',
        'COUPLE',
        'ENFANT',
        'TABLE RONDE',
        'VVIP',
        
    ];
    public function run()
    {
        //
        foreach(self::$type_billet as $type_billet){
            DB::table('typebillets')->insert([
                'typebillet' => $type_billet
            ]);
        }
    }
}
