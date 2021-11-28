<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class daftar_directorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_director' => $this->faker->randomElement(['Diah Paramitha', 'Adinda Khairani', 'Afdoni Prabawa Said', 'Logi Sanjaya']),
        ];
    }
}
