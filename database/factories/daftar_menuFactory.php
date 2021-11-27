<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class daftar_menuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_menu' => $this->faker->randomElement(['Populer', 'Pilihan', 'Original', 'Korean', 'India', 'Anime', 'Chinese', 'Thai']),
        ];
    }
}
