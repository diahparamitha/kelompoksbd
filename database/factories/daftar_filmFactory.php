<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class daftar_filmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul_film' => $this->faker->sentence(mt_rand(1,3)),
            'batasan_umur_film' => $this->faker->numberBetween($min = 13, $max = 19),
            'cover_film' => $this->faker->imageUrl($width = 185, $height = 278),
            'description_film' => $this->faker->sentence(mt_rand(10,20)),
            'komentar_film' => $this->faker->sentence(mt_rand(10,20)),
            'id_director' => mt_rand(1,10),
            'id_pemain' => mt_rand(1,10),
            'id_genre' => mt_rand(1,7),
            'id_menu' => mt_rand(1,8),
        ];
    }
}
