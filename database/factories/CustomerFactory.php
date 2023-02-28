<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CustomerFactory extends Factory
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
            "id_card_number" => $this->faker->numerify('3521###########'),
            "phone_number" => $this->faker->numerify('081########'),
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
            "office_number" => $this->faker->numerify('081########'),
            "mate_name" => $this->faker->name(),
            "mate_place_of_birth" => $this->faker->city(),
            "mate_date_of_birth" => $this->faker->date(),
            "mate_profession" => $this->faker->jobTitle(),
            "mate_id_card_address" => $this->faker->address(),
            "mate_residence_address" => $this->faker->address(),
            "mate_phone_number" => $this->faker->numerify('081########'),
            "family_name" => $this->faker->name(),
            "family_residence_address" => $this->faker->address(),
            "family_phone_number" => $this->faker->numerify('081########'),
            "family_relationship" => $this->faker->randomElement([
                "Anak Kandung",
                "Orang Tua",
                "Saudara Kandung",
                "Saudara Tidak Sekandung",
                "Tetangga",
                "Rekan Kerja"
            ]),
        ];
    }
}
