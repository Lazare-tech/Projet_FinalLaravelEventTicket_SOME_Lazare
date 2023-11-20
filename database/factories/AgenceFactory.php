<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agence>
 */
class AgenceFactory extends Factory
{
    private static $userCounter = 1; // Initialisez le compteur à 1
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = FakerFactory::create();
        return [
            //
            'nom' =>fake()->company(),
            'description' => fake()->sentence,
            'adresse' => fake()->address,
            'contact' => fake()->phoneNumber,
            'email' => fake()->unique()->safeEmail(),
            'site_web' => fake()->url,
            'user_id' =>self::$userCounter++,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
