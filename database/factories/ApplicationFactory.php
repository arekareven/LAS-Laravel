<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Application>
 */
class ApplicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "id_customer" => $this->faker->randomDigit(),
            "plafond" => $this->faker->numberBetween(75000000,150000000),
            "credit_type" => $this->faker->randomElement([
                "Pokok Bunga Tiap Bulan",
                "Pokok Tiap 3 Bulan Bunga Tiap Bulan",
                "Pokok Tiap 4 Bulan Bunga Tiap Bulan",
                "Pokok Tiap 6 Bulan Bunga Tiap Bulan",
                "Pokok Tiap 12 Bulan Bunga Tiap Bulan",
                "Pokok Terakhir Bunga Tiap Bulan",
                "Pokok Bunga Terakhir",
                "Musiman",
                "Anuitas",
                "Efektif"
            ]),
            "application_type" => $this->faker->randomElement([
                "Baru",
                "Ulangan",
                "Top Up / Perpanjangan",
                "Restrukturisasi"
            ]),
            "purpose" => $this->faker->randomElement([
                "Modal Kerja",
                "Investasi",
                "Konsumtif"
            ]),
            "purpose_description" => $this->faker->sentence(),
            "application_date" => $this->faker->date(),
            "analysis_date" => $this->faker->date(),
            "time_period" => $this->faker->randomDigit(2),
        ];
    }
}
