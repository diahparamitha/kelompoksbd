<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class daftar_pemainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_pemain' => $this->faker->name(),
        ];
    }
}
