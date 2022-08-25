<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Eleve>
 */
class EleveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->firstName,
            'prenom' => $this->faker->lastName,
            'age' => $this->faker->numberBetween($int1=18,$int2=50),
            'chercheur d\'emploie' => $this->faker->boolean,
        ];
    }
}
