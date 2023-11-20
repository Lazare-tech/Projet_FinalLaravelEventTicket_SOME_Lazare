<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
          //roles
         $this->call(RoleSeeder::class);
        
         \App\Models\User::factory(7)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        //agence
        \App\Models\Agence::factory(7)->create();

        //categorie
         $this->call(CategorieSeeder::class);
      ///timezone
         $this->call(TimezoneSeeder::class);
         //
         $this->call(EtatevenementSeeder::class);
         //TYPE BILLET
         $this->call(TypebilletSeeder::class);



    }
}
