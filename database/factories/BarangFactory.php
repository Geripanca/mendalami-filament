<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name_barang' => $this->faker->word,  // Use faker->word() for a random word
            'harga_barang' => $this->faker->numberBetween(10000, 1000000),  // Use faker->numberBetween() for a random price
            'deskripsi_barang' => $this->faker->text(),  // Use faker->text() for a random description

        ];
    }
}
