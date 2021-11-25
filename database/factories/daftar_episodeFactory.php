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
            'no_episode' => $this->faker->numberBetween($min = 1, $max = 20),
            'judul_episode' => $this->faker->sentence(2,5),
            'deskripsi_episode' => $this->faker->sentence(10,15),
            'cover_episode' => $this->faker->imageUrl($width = 185, $height = 278),
            'hashtag_episode' => $this->faker->numberBetween($min = 1, $max = 20),
            'komentar_episode' => $this->faker->sentence(1,7),
        ];
    }
}
