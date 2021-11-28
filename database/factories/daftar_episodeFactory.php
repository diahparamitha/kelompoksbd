<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class daftar_episodeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'no_episode' => $this->faker->randomElement(['2', '3', '8' , '12', '16', '20', '24', '32', '36', '50']),
        ];
    }
}
