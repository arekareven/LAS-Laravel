<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Background>
 */
class BackgroundFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "analysisDate" => $this->faker->date(),
            "apllicationDate" => $this->faker->date(),
            "plafond" => $this->faker->numberBetween(0,100000),
            "creditType" => $this->faker->randomElement([
                "Tiap Bulan",
                "Tiap 4 Bulan",
                "Tiap 6 Bulan",
                "Anuitas"
            ]),
            
        ];
    }
}
