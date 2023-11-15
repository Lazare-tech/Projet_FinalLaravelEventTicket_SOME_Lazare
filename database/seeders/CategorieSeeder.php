<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     
    static $categories=[
        'Festival',
        'Musique',
        'Salon grand public',
        'Atelier',
        'Fete',
        'Concert',
        'Loisirs',
        'Cinema'
    ];
    public function run()
    {
        //
        
        foreach (self::$categories as $categorie) {
            DB::table('categories')->insert([
                'nom' => $categorie,
                
            ]);
        }
    }
}
