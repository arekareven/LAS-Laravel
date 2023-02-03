<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CostumerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name(),
            "marital_status" => $this->faker->randomElement([
                "Lajang",
                "Menikah",
                "Duda",
                "Janda"
            ]),
            "place_of_birth" => $this->faker->city(),
            "date_of_birth" => $this->faker->date(),
            "id_card_number" => $this->faker->nik(),
            "phone_number" => $this->faker->phoneNumber(),
            "status_of_residence" => $this->faker->randomElement([
                "Milik Sendiri",
                "Milik Keluarga",
                "Instansi",
                "Kontrak",
                "Kredit"
            ]),
            "profession" => $this->faker->jobTitle(),
            "id_card_address" => $this->faker->address(),
            "residence_address" => $this->faker->address(),
            "amenability" => $this->faker->randomDigit(),
            "education" => $this->faker->randomElement([
                "S3",
                "S2",
                "S1",
                "Diploma",
                "SMA",
                "SMP",
                "SD"
            ]),
            "gender" => $this->faker->randomElement([
                "Laki - Laki",
                "Perempuan"
            ]),
        ];
    }
}
