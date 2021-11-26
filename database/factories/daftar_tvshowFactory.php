<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class daftar_tvshowFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul_tvshow' => $this->faker->sentence(mt_rand(1,3)),
            'batasan_umur_film' => $this->faker->numberBetween($min = 13, $max = 19),
            'cover_tvshow' => $this->faker->imageUrl($width = 185, $height = 278),
            'description_tvshow' => $this->faker->sentence(mt_rand(10,20)),
            'id_director' => mt_rand(1,5),
            'id_pemain' => mt_rand(1,5),
            'id_episode' => mt_rand(1,20),
            'id_genre' => mt_rand(1,5),
            'id_menu' => mt_rand(1,3),

        ];
    }
}
