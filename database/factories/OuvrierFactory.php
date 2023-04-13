<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ouvrier>
 */
class ouvrierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom' => fake()->name(),
            'prenom' => fake()->name(),
            'address' => fake()->address(),
            'ville' => fake()->city(),
            'email' => fake()->unique()->safeEmail(),
            'cin' =>Str::random(5),
            'bio' => fake()->sentence($nbWords = 6, $variableNbWords = true) ,
            'phone' => fake()->e164PhoneNumber(),
            'active' =>1,
            'password' =>'3rtweter4',
            'categorie_id' =>1,
        ];
    }
}
