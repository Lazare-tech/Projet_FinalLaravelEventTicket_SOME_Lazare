<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EtatevenementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    static $etats=[
        'En cours',
        'A venir',
     ];
     public function run()
     {
         //
         foreach (self::$etats as $etat) {
             DB::table('etats')->insert([
                 'nom' => $etat,
                 
             ]);
         }
     }
}
